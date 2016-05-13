<?php

namespace Fully\Composers;

use Fully\Models\Article;
use Fully\Repositories\Article\ArticleInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Users\Repository as UserRepository;

/**
 * Class ArticleComposer.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class SitemapComposer
{
    /**
     * @var \Fully\Repositories\Article\ArticleInterface
     */
    protected $article;
    protected $users;

    /**
     * @param ArticleInterface $article
     */
    public function __construct(UserRepository $users, ArticleInterface $article)
    {
        $this->article = $article;
        $this->users = $users;
    }

    /**
     * @param $view
     */
    public function compose($view )
    {


        $view->with('count', $this->users->count());
        $articles = $this->article->getLastArticle();
        $view->with('articles', $articles);
    }
}
