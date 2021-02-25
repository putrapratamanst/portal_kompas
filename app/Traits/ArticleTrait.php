<?php

namespace App\Traits;

use App\Models\Article;
use App\Repositories\ArticleRepository;

/**
 * 
 */
trait ArticleTrait
{
    private $repo;

    public function __construct(ArticleRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getListArticlePublished()
    {
        return $this->repo->listArticlePublished();
    }

    public function getListArticle()
    {
        return $this->repo->listArticle();
    }

    public function getDetailArticlePublished($id)
    {
        $this->repo->id = $id;
        return $this->repo->detailArticlePublished();
    }

    public function getDetailArticle($id)
    {
        $this->repo->id = $id;
        return $this->repo->detailArticle();
    }

    public function getDetailArticleNoJoin($id)
    {
        $this->repo->id = $id;
        return $this->repo->detailArticleNoJoin();
    }

}