<?php

namespace Fully\Http\Controllers;

use Illuminate\Http\Request;

use View;
use Fully\Services\Pagination;
use Fully\Repositories\Tag\TagInterface;
use Fully\Repositories\Article\ArticleInterface;
use Fully\Repositories\Tag\TagRepository as Tag;
use Fully\Repositories\Category\CategoryInterface;
use Fully\Repositories\Category\CategoryRepository as Category;

/**
 * Class ArticleController.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class ArticleController extends Controller
{
    public $article;
    protected $tag;
    protected $category;
    protected $perPage;

    public function __construct(ArticleInterface $article, TagInterface $tag, CategoryInterface $category)
    {
        $this->article = $article;
        $this->tag = $tag;
        $this->category = $category;
        $this->perPage = config('fully.modules.article.related_per_page');
        $this->perPage = config('fully.modules.article.per_page');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request)
    {

       // $url = route('article');
        //$redirect = redirect()->route('article');


        $pagiData = $this->article->paginate($request->get('page', 1), $this->perPage, false);
        $articles = Pagination::makeLengthAware($pagiData->items, $pagiData->totalItems, $this->perPage);

        $tags = $this->tag->all();
        $categories = $this->category->all();
//dd($tags);
//dd($categories);
        return view('frontend.article.index', compact('articles', 'tags', 'categories'));
    }

    // $category = Category::first();
    // $latestPost = $category->posts()->latest()->first();


    /**
     * @param $slug
     * @return View
     */
    public function show($slug)
    {


        // $url = route('article.show');
        // $redirect = redirect()->route('article.show');

        $article = $this->article->getBySlug($slug);

        if ($article == null) {
            return Response::view('errors.missing', [], 404);
        }

        View::composer('frontend/layout/layout', function ($view) use ($article) {

            $view->with('meta_keywords', $article->meta_keywords);
            $view->with('meta_description', $article->meta_description);
        });


        $categories = $this->category->all();
        $tags = $this->tag->all();



        return view('frontend.article.show', compact('article', 'categories', 'tags'));
    }

    public function latestArticle()
    {
      return $this->hasOne('article')->latest();
    }

    public function latestArticles()
    {
        return $this->Articles()->latest()->nPerGroup('article_id', 5);
    }



    public function getRelatedArticles()
    {
        $categories = Category::with(['articles' => function($query){
            $query->orderBy('updated_at', 'DESC')->take(4)->get();
        }])->get();

        return View::make('articles', compact('categories'));
    }


    public function getRelatedCatetory()
    {

    $categories = Category::with(['posts' => function ($q) {
      $q->latest(); // sorting related table, so we can use first on the collection
    }])->take(20)->get();
    }
// https://softonsofa.com/tweaking-eloquent-relations-how-to-get-n-related-models-per-parent/
/**
     * Get latest 5 comments from hasMany relation.
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function latestComments()
    {
        return $this->comments()->latest()->nPerGroup('post_id', 5);
    }

    /**
     * Post has many Comments
     *
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('Comment');
    }


}
