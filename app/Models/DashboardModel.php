<?php

namespace App\Models;

use CodeIgniter\Model;

class dashboardModel extends Model
{
    protected $table      = 'article';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';

    protected $allowedFields = ['titlepost', 'slug', 'author', 'category', 'thumbnail', 'content'];

    public function getArticle($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    public function search($keyword)
    {
        return $this->table('article')->like('titlepost', $keyword)->orLike('category', $keyword);
    }
}
