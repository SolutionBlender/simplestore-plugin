<?php namespace SolutionBlender\SimpleStore\Components;

use Cms\Classes\ComponentBase;
use Input;
use SolutionBlender\SimpleStore\Models\Product as ProdModel;

class Product extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Product Component',
            'description' => 'This is not done do not touch it yet.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function product(){
       return ProdModel::find(Input::get('buy-item-id'));
    }

}