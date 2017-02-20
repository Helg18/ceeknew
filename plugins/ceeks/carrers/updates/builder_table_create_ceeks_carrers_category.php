<?php namespace Ceeks\Carrers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeeksCarrersCategory extends Migration
{
    public function up()
    {
        Schema::create('ceeks_carrers_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceeks_carrers_category');
    }
}
