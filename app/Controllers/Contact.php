<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class Contact extends BaseController
{
    // Constructed //
    protected $dashboardModel;
    public function __construct()
    {
        $this->dashboardModel = new DashboardModel();
    }


    // Index //
    public function index()
    {
        $builder = $this->db->table('category');
        $category = $builder->get()->getResult();

        $currentPage = $this->request->getVar('page_article') ? $this->request->getVar('page_article') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $search = $this->dashboardModel->search($keyword);
            session()->set('qsearch', $keyword);
            return redirect()->to('/search');
        } else {
            $search = $this->dashboardModel;
        }

        $data = [
            'title'                   => 'Contact',
            'category'                => $category,

            'pager'                   => $this->dashboardModel->pager,
            'currentPage'             => $currentPage,
        ];

        return view('/article/contact', $data);
    }
    // end Index //


    // Detail //
    public function read($slug)
    {

        $builder = $this->db->table('category');
        $category = $builder->get()->getResult();

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $search = $this->dashboardModel->search($keyword);
            session()->set('qsearch', $keyword);
            return redirect()->to('/search');
        } else {
            $search = $this->dashboardModel;
        }

        $data = [
            'title'       => $slug,
            'article'     => $this->dashboardModel->getArticle($slug),
            'category'    => $category,

            'popular'     => $search->orderBy('id', 'ASC')->findAll(4),
            'celebration' => $search->orderBy('id', 'ASC')->paginate(2, 'article'),
        ];

        //if article not this table
        if (empty($data['article'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Article ' . $slug . ' Not Found.');
        }

        return view('/article/read', $data);
    }
    // end Detail //
}
