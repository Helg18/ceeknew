<?php namespace Ceeks\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeeksNewsCategory extends Migration
{
    public function up()
    {
        Schema::create('ceeks_news_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceeks_news_category');
    }
}
