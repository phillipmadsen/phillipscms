<?php

use Faker\Factory as Faker;
use App\Models\Admin\Product;
use App\Repositories\Admin\ProductRepository;

trait MakeProductTrait
{
    /**
     * Create fake instance of Product and save it in database
     *
     * @param array $productFields
     * @return Product
     */
    public function makeProduct($productFields = [])
    {
        /** @var ProductRepository $productRepo */
        $productRepo = App::make(ProductRepository::class);
        $theme = $this->fakeProductData($productFields);
        return $productRepo->create($theme);
    }

    /**
     * Get fake instance of Product
     *
     * @param array $productFields
     * @return Product
     */
    public function fakeProduct($productFields = [])
    {
        return new Product($this->fakeProductData($productFields));
    }

    /**
     * Get fake data of Product
     *
     * @param array $postFields
     * @return array
     */
    public function fakeProductData($productFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'meta_title' => $fake->word,
            'facebook_title' => $fake->word,
            'google_plus_title' => $fake->word,
            'meta_description' => $fake->word,
            'short_description' => $fake->text,
            'description' => $fake->text,
            'category_id' => $fake->randomDigitNotNull,
            'price' => $fake->randomDigitNotNull,
            'sku' => $fake->word,
            'mpn' => $fake->word,
            'imageurl' => $fake->word,
            'file_id' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word,
            'is_active' => $fake->word
        ], $productFields);
    }
}
