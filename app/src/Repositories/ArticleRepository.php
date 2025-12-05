<?php
namespace App\Repositories;

use App\Repositories\IArticleRepository;
use App\Models\ArticleModel;
use PDO;

class ArticleRepository extends BaseRepository implements IArticleRepository
{
    public function getAll(): array
    {
            $result = $this->connection->query(query: "SELECT id, title, content, author, datetime FROM article");
            $articles = $result->FetchAll(mode: PDO::FETCH_CLASS, column: ArticleModel::class);
            //require(__DIR__ . '/../Views/guestbook.php');
            return $articles;
    }

    public function create(ArticleModel $article): void
    {

    }
}
?>