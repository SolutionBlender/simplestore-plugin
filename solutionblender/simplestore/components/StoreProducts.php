<?php namespace SolutionBlender\SimpleStore\Components;

use Cms\Classes\ComponentBase;
use SolutionBlender\SimpleStore\Controllers\Products;
use SolutionBlender\SimpleStore\Models\Product;
use Config;
use SolutionBlender\SimpleStore\Models\Settings;

class StoreProducts extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Store Products',
            'description' => 'Display your stores products'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function products()
    {
        return Product::all();
    }



    public function api_key()
    {
        return Settings::instance()->api_key_publishable;
    }

}