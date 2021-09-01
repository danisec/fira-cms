<?php

namespace App\Models;

use CodeIgniter\Model;

class categoryModel extends Model
{
    protected $table      = 'category';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';

    protected $allowedFields = ['category'];

    public function getArticle($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('category')->like('category', $keyword);
    }
}
