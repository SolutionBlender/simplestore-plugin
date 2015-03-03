<?php namespace SolutionBlender\SimpleStore\Updates;

use Schema;
use Seeder;
use SolutionBlender\SimpleStore\Models\Product;


class SeedUsersTable extends Seeder
{
    public function run()
    {
        $product = Product::create([
            'name' => 'Bacon Baby!',
            'price' => '10.00',
            'image' => 'http://baconmockup.com/200/200',
            'in_stock' => true,
            'description' => 'A bacon hat!'
        ]);
        $product = Product::create([
            'name' => 'Bacon Baby!',
            'price' => '20.00',
            'image' => 'http://baconmockup.com/200/200',
            'in_stock' => true,
            'description' => 'A bacon hat!'
        ]);
        $product = Product::create([
            'name' => 'Bacon Baby!',
            'price' => '30.00',
            'image' => 'http://baconmockup.com/200/200',
            'in_stock' => true,
            'description' => 'A bacon hat!'
        ]);

        $product = Product::create([
            'name' => 'Bacon Baby!',
            'price' => '40.00',
            'image' => 'http://baconmockup.com/200/200',
            'in_stock' => true,
            'description' => 'A bacon hat!'
        ]);
        $product = Product::create([
            'name' => 'Bacon Baby!',
            'price' => '50.00',
            'image' => 'http://baconmockup.com/200/200',
            'in_stock' => true,
            'description' => 'A bacon hat!'
        ]);
        $product = Product::create([
            'name' => 'Bacon Baby!',
            'price' => '60.00',
            'image' => 'http://baconmockup.com/200/200',
            'in_stock' => true,
            'description' => 'A bacon hat!'
        ]);
    }

}
