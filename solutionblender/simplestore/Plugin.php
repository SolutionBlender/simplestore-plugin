<?php namespace SolutionBlender\SimpleStore;

use SolutionBlender\SimpleStore\Models\Product;
use System\Classes\PluginBase;
use Backend;
use Config;
use Stripe;
use SolutionBlender\SimpleStore\Models\Settings;
use Input;

/**
 * SimpleStore Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'SimpleStore',
            'description' => 'A simple store with Stripe integration',
            'author'      => 'SolutionBlender',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'SolutionBlender\SimpleStore\Components\StoreProducts' => 'storeProducts',
            'SolutionBlender\SimpleStore\Components\Product' => 'product'
        ];
    }

    public function boot()
    {
        require('vendor/autoload.php');
        Stripe\Stripe::setApiKey(Settings::instance()->api_key);
        if(Input::has('stripeToken') && Input::has('product_id')){
           $product = Product::find(Input::get('product_id'));
            try {
                $charge = \Stripe\Charge::create(array(
                        "amount" => preg_replace('/[.]/', '', $product->price), // amount in cents, again
                        "currency" => "usd",
                        "source" => Input::get('stripeToken'),
                        "description" => "payinguser@example.com")
                );
            } catch(\Stripe\Error\Card $e) {
                // The card has been declined
            }
        }
    }


    public function registerSettings()
    {
        return [
            'stripe' => [
                'label'       => 'Stripe Key',
                'description' => 'Manage Stripe API key.',
                'category'    => 'SimpleStore',
                'icon'        => 'icon-globe',
                'class'       => 'SolutionBlender\SimpleStore\Models\Settings',
                'order'       => 500,
                'keywords'    => 'stripe api'
            ]
        ];
    }

    public function registerNavigation()
    {
        return [
            'blog' => [
                'label'       => 'SimpleStore',
                'url'         => Backend::url('solutionblender/simplestore/products'),
                'icon'        => 'icon-shopping-cart',
                'permissions' => ['solutionblender.simplestore.*'],
                'order'       => 500,

            ]
        ];
    }

}
