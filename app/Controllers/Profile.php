<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Profile extends BaseController
{
    // Constructed //
    protected $profileModel;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');

        $this->profileModel = new ProfileModel();
    }

    /* Profile */
    public function profile()
    {
        $data = [
            'title'    => 'Profile',
        ];

        return view('dashboard/profile', $data);
    }
}
