<?php namespace SolutionBlender\SimpleStore\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSettingsTable extends Migration
{

    public function up()
    {
        Schema::create('solutionblender_simplestore_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('api_key');
            $table->string('api_key_publishable');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solutionblender_simplestore_settings');
    }

}
