<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Category extends BaseController
{
    // Constructed //
    protected $categoryModel;
    public function __construct()
    {
        $this->db = \Config\Database::connect();

        $this->categoryModel = new CategoryModel();
    }

    // Add Category //
    public function add_category()
    {
        $currentPage = $this->request->getVar('page_article') ? $this->request->getVar('page_article') : 1;

        $builder = $this->db->table('category');
        $category = $builder->get()->getResult();
        $data = [
            'title'       => 'Category',
            'validation'  => \Config\Services::validation(),
            'category'    => $category,
            'article'     => $this->categoryModel->paginate(1, 'category'),
            'pager'       => $this->categoryModel->pager,
            'currentPage' => $currentPage
        ];

        return view('dashboard/add_category', $data);
    }

    public function save()
    {
        // Validation Input //
        if (!$this->validate([
            'category'  => [
                'rules' => 'required|is_unique[category.category]'
            ]

        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/dashboard/add_category')->withInput()->with('validation', $validation);
        }

        $this->categoryModel->save([
            'category' => $this->request->getVar('category')
        ]);

        session()->setFlashdata('modalNotif', 'Create successfull.');

        return redirect()->to('/dashboard/add_category');
    }

    public function delete($id)
    {
        $this->db->table('category')->where(['id' => $id])->delete();

        session()->setFlashdata('modalNotif', 'Delete successfull.');
        return redirect()->to('dashboard/add_category');
    }
    // end Add Category //


    // Edit Category //
    public function edit_category($id)
    {
        $data = [
            'title'       => 'Edit category',
            'validation'  => \Config\Services::validation(),
            'id'          => $id,
            'category'    => $this->categoryModel->getArticle($id),
        ];

        return view('/dashboard/edit_category', $data);
    }

    public function update($id)
    {
        // Validation Input //
        if (!$this->validate([
            'category'  => [
                'rules' => 'required|is_unique[category.category]'
            ]

        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/dashboard/edit_category/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);
        }

        $this->categoryModel->save([
            'id'        => $id,
            'category'  => $this->request->getVar('category'),

        ]);

        session()->setFlashdata('modalNotif', 'Update successfull.');

        return redirect()->to('/dashboard/add_category');
    }
    // end Edit Category //
}
