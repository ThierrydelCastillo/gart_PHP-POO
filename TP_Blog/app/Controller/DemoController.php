<?php

namespace App\Controller;

use App\Controller\AppController;
use Core\Database\QueryBuilder;

class DemoController extends AppController {

    public function index()
    {
        $query = new QueryBuilder;
        echo $query
            ->select('id', 'titre', 'contenu')
            ->from('articles', 'Post')
            ->where('Post.category_id = 1')
            ->where('Post.date > NOW()');
    }

}