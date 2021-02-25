<?php

namespace App\Repositories;

use App\Helpers\Constant;
use App\Models\Article;

class ArticleRepository
{
    public $id;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function listArticlePublished()
    {
        return Article::where('status', Constant::STATUS_PUBLISHED)
            ->join('users', 'articles.author_id', '=', 'users.id')
            ->orderBy('articles.id', 'DESC')
            ->get();
    }

    public function listArticle()
    {
        return Article::select([
            'articles.id', 'articles.title', 'articles.body',
            'articles.published_date', 'articles.status', 'users.name', 'articles.photo'
        ])
            ->join('users', 'articles.author_id', '=', 'users.id')
            ->orderBy('articles.id', 'DESC')
            ->get();
    }

    public function detailArticlePublished()
    {
        return Article::select([
            'articles.id', 'articles.title', 'articles.body',
            'articles.published_date', 'articles.status', 'users.name', 'articles.photo'
        ])->where('status', Constant::STATUS_PUBLISHED)
            ->join('users', 'articles.author_id', '=', 'users.id')
            ->where('articles.id', $this->id)
            ->first();
    }

    public function detailArticle()
    {
        return Article::where('articles.id', $this->id)
            ->first();
    }

    public function detailArticleNoJoin()
    {
        return Article::where('articles.id', $this->id)
            ->first();
    }
}
