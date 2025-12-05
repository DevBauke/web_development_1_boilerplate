<?php

namespace App\Services;

use App\Services\IArticleService;
use App\Repositories\ArticleRepository;
use App\Repositories\IArticleRepository;
use App\Models\ArticleModel;

class ArticleService implements IArticleService
{
    private IArticleRepository $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new ArticleRepository();
    }
    
    public function getAll(): array
    {
        return $this->articleRepository->getAll();
    }
    public function create(ArticleModel $article): void
    {
        return;
    }
    public function get(int $id) : ?ArticleModel
    {
        return null;
    }
    public function update(ArticleModel $article) : void
    {
        return;
    }
    public function delete(int $id) : void
    {
        return;
    }
}
?>