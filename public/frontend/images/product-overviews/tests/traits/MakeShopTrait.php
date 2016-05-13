<?php

use Faker\Factory as Faker;
use App\Models\Shop;
use App\Repositories\ShopRepository;

trait MakeShopTrait
{
    /**
     * Create fake instance of Shop and save it in database
     *
     * @param array $shopFields
     * @return Shop
     */
    public function makeShop($shopFields = [])
    {
        /** @var ShopRepository $shopRepo */
        $shopRepo = App::make(ShopRepository::class);
        $theme = $this->fakeShopData($shopFields);
        return $shopRepo->create($theme);
    }

    /**
     * Get fake instance of Shop
     *
     * @param array $shopFields
     * @return Shop
     */
    public function fakeShop($shopFields = [])
    {
        return new Shop($this->fakeShopData($shopFields));
    }

    /**
     * Get fake data of Shop
     *
     * @param array $postFields
     * @return array
     */
    public function fakeShopData($shopFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $shopFields);
    }
}
