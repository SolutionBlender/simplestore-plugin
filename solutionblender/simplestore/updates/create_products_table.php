<?php namespace SolutionBlender\SimpleStore\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('solutionblender_simplestore_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->string('image');
            $table->boolean('in_stock');
            $table->longText('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solutionblender_simplestore_products');
    }

}
