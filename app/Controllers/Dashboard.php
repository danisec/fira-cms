<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class Dashboard extends BaseController
{
    // Constructed //
    protected $dashboardModel;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');

        $this->dashboardModel = new DashboardModel();
    }

    // Index //
    public function index()
    {
        $builder = $this->db->table('article');
        $total_article = $builder->countAllResults();

        $builder = $this->db->table('users');
        $total_users = $builder->countAllResults();

        $builder = $this->db->table('category');
        $total_category = $builder->countAllResults();

        $currentPage = $this->request->getVar('page_article') ? $this->request->getVar('page_article') : 1;

        $keyword = $this->request->getVar('q');
        if (isset($keyword)) {
            $search = $this->dashboardModel->search($keyword);
            session()->set('qsearch', $keyword);
        } else {
            $search = $this->dashboardModel;
        }

        $data = [
            'title'             => 'Dashboard',
            'total_article'     => $total_article,
            'total_user'        => $total_users,
            'total_category'    => $total_category,
            'article'           => $search->paginate(5, 'article'),
            'pager'             => $this->dashboardModel->pager,
            'currentPage'       => $currentPage
        ];

        return view('dashboard/index', $data);
    }
    // end Index //


    // Create Post //
    public function create_post()
    {
        $builder = $this->db->table('category');
        $category = $builder->get()->getResult();

        $data = [
            'title'      => 'Post',
            'validation' => \Config\Services::validation(),
            'category'   => $category
        ];

        return view('dashboard/create_post', $data);
    }

    public function save()
    {
        // Validation Input //
        if (!$this->validate([
            'titlepost' => [
                'rules' => 'required|is_unique[article.titlepost]'
            ],

            'thumbnail' => [
                'rules' => 'max_size[thumbnail,5024]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]'
            ]

        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/dashboard/create_post')->withInput()->with('validation', $validation);
        }

        // get Image //
        $filethumbnail = $this->request->getFile('thumbnail');
        // check image uplod //
        if ($filethumbnail->getError() == 4) {
            $thumbnailname = 'default.jpg';
        } else {
            // generate name thumbnail //
            $thumbnailname = $filethumbnail->getRandomName();
            // move file to folder img //
            $filethumbnail->move('img', $thumbnailname);
        }


        $slug = url_title($this->request->getVar('titlepost'), '-', true);

        $this->dashboardModel->save([
            'titlepost' => $this->request->getVar('titlepost'),
            'slug'      => $slug,
            'category'  => $this->request->getVar('category'),
            'author'    => $this->request->getVar('author'),
            'thumbnail' => $thumbnailname,
            'content'   => $this->request->getVar('content'),

        ]);

        session()->setFlashdata('modalNotif', 'Create successfull.');

        return redirect()->to('/dashboard/list_article');
    }

    public function uploadGambar()
    {
        if ($this->request->getFile('file')) {
            $dataFile = $this->request->getFile('file');
            $fileName = $dataFile->getRandomName();
            $dataFile->move("/uploads", $fileName);
            echo base_url("/uploads/$fileName");
        }
    }

    public function deleteGambar()
    {
        $src = $this->request->getVar('src');

        //http://localhost/namefile
        if ($src) {
            $file_name = str_replace(base_url() . "/", "", $src);
            if (unlink($file_name)) {
                echo "Delete File Sucess";
            }
        }
    }

    public function delete($id)
    {
        // Search image for $id //
        $article = $this->dashboardModel->find($id);

        // ceck if image default.jpg //
        if ($article['thumbnail'] != 'default.jpg') {
            // Delete Image //
            unlink('img/' . $article['thumbnail']);
        }


        $this->dashboardModel->delete($id);

        session()->setFlashdata('modalNotif', "Delete successfull");
        return redirect()->to('dashboard/list_article');
    }
    // end Create Post //


    // Update Article //
    public function update_article($slug)
    {
        $builder = $this->db->table('category');
        $category = $builder->get()->getResult();

        $data = [
            'title'      => 'Edit',
            'validation' => \Config\Services::validation(),
            'article'    => $this->dashboardModel->getArticle($slug),
            'category'   => $category
        ];

        return view('dashboard/update_article', $data);
    }

    public function update($id)
    {
        // Ceck titlepost //
        $oldtitle = $this->dashboardModel->getArticle($this->request->getVar('slug'));
        if ($oldtitle['titlepost'] == $this->request->getVar('titlepost')) {
            $rule_titlepost = 'required';
        } else {
            $rule_titlepost = 'required|is_unique[article.titlepost]';
        }


        // Validation Input //
        if (!$this->validate([
            'titlepost' => [
                'rules' => $rule_titlepost,
            ],

            'thumbnail' => [
                'rules' => 'max_size[thumbnail,5024]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]'
            ]

        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/dashboard/update_article/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $filethumbnail = $this->request->getFile('thumbnail');

        // ceck image, oldthumbnail //
        if ($filethumbnail->getError() == 4) {
            $thumbnailname = $this->request->getVar('oldthumbnail');
        } else {
            //generate file random //
            $thumbnailname = $filethumbnail->getRandomName();
            // upload image //
            $filethumbnail->move('img', $thumbnailname);
            // Delete image //
            unlink('img/' . $this->request->getVar('oldthumbnail'));
        }


        $slug = url_title($this->request->getVar('titlepost'), '-', true);

        $this->dashboardModel->save([
            'id'        => $id,
            'titlepost' => $this->request->getVar('titlepost'),
            'slug'      => $slug,
            'category'  => $this->request->getVar('category'),
            'author'    => $this->request->getVar('author'),
            'thumbnail' => $thumbnailname,
            'content'   => $this->request->getVar('content'),

        ]);

        session()->setFlashdata('modalNotif', 'Update successfull.');

        return redirect()->to('/dashboard/list_article');
    }
    // end Update Article //


    // List Article //
    public function list_article()
    {
        $currentPage = $this->request->getVar('page_article') ? $this->request->getVar('page_article') : 1;

        $keyword = $this->request->getVar('q');
        if ($keyword) {
            $search = $this->dashboardModel->search($keyword);
            session()->set('qsearch', $keyword);
        } else {
            $search = $this->dashboardModel;
        }

        $data = [
            'title'       => 'Article',
            'article'     => $search->paginate(9, 'article'),
            'pager'       => $this->dashboardModel->pager,
            'currentPage' => $currentPage
        ];


        return view('dashboard/list_article', $data);
    }
    // end List Article //

    // User List //
    public function user_list()
    {
        $data['title'] = 'User';

        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();

        return view('/dashboard/user_list', $data);
    }

    public function delete_user($id = 0)
    {
        $this->db->table('users')->where(['id' => $id])->delete();

        session()->setFlashdata('modalNotif', 'Delete successfull.');
        return redirect()->to('dashboard/user_list');
    }
    // end User List //

    // User Detail //
    public function user_detail($id = 0)
    {
        $data['title'] = 'User Detail';

        $this->builder->select('users.id as userid, username, email, fullname, user_image, biodata, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/dashboard/user_list');
        }

        return view('dashboard/user_detail', $data);
    }
    // end User Detail //
}
