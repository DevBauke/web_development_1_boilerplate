<?php

namespace App\Controllers;

use App\Services\IArticleService;
use App\Services\ArticleService;

class ArticleController
{
    private IArticleService $articleService;

    public function index()
    {
        echo "Look at me, I'm in the controller!";
        $articles = $this->articleService->getAll();
        var_dump($articles);
        //$vm = new ArticlesViewModel($articles);
        //require __DIR__ . 
    }

    public function __construct()
    {
        $this->articleService = new ArticleService();
    }
}

?>