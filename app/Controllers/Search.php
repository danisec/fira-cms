<?php

namespace App\Controllers;

use App\Models\DashboardModel;

class Search extends BaseController
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

        $keyword = $this->request->getVar('q');
        if (isset($keyword)) {
            $search = $this->dashboardModel->search($keyword);
            session()->set('qsearch', $keyword);
        } else {
            $search = $this->dashboardModel;
        }

        $data = [
            'title'           => 'Search',
            'category'        => $category,

            'latest_post'     => $search->orderBy('id', 'ASC')->paginate(12, 'article'),
            'popular'         => $search->findAll(4),

            'pager'           => $this->dashboardModel->pager,
            'currentPage'     => $currentPage,
        ];

        return view('/search/index', $data);
    }
    // end Index //

}
