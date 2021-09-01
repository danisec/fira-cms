<?php

namespace App\Controllers;

use App\Models\dashboardModel;

class Dashboard extends BaseController
{
    protected $dashboardModel;
    public function __construct()
    {
        $this->dashboardModel = new dashboardModel();
    }

    public function index()
    {
        return view('dashboard/index');
    }


    /* Login-Register*/
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }
}
