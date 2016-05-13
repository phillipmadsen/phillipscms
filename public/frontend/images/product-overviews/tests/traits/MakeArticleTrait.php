<?php

use Faker\Factory as Faker;
use App\Models\Admin\Article;
use App\Repositories\Admin\ArticleRepository;

trait MakeArticleTrait
{
    /**
     * Create fake instance of Article and save it in database
     *
     * @param array $articleFields
     * @return Article
     */
    public function makeArticle($articleFields = [])
    {
        /** @var ArticleRepository $articleRepo */
        $articleRepo = App::make(ArticleRepository::class);
        $theme = $this->fakeArticleData($articleFields);
        return $articleRepo->create($theme);
    }

    /**
     * Get fake instance of Article
     *
     * @param array $articleFields
     * @return Article
     */
    public function fakeArticle($articleFields = [])
    {
        return new Article($this->fakeArticleData($articleFields));
    }

    /**
     * Get fake data of Article
     *
     * @param array $postFields
     * @return array
     */
    public function fakeArticleData($articleFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'author_id' => $fake->randomDigitNotNull,
            'is_published' => $fake->word,
            'is_draft' => $fake->word,
            'title' => $fake->word,
            'excerpt' => $fake->text,
            'content' => $fake->text,
            'slug' => $fake->word,
            'meta_title' => $fake->word,
            'fb_title' => $fake->word,
            'gp_title' => $fake->word,
            'meta_keywords' => $fake->word,
            'meta_description' => $fake->text,
            'path' => $fake->word,
            'file_name' => $fake->word,
            'file_size' => $fake->randomDigitNotNull,
            'category_id' => $fake->randomDigitNotNull,
            'has_product_link' => $fake->word,
            'product_link_nofollow' => $fake->word,
            'link_to_product_title' => $fake->word,
            'link_to_product' => $fake->word,
            'lang' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $articleFields);
    }
}
