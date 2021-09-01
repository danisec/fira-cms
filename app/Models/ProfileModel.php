<?php

namespace App\Models;

use CodeIgniter\Model;

class profileModel extends Model
{
    protected $table      = 'users';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'fullname', 'user_image', 'biodata'];

    public function getUsers($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
