<?php namespace Ceeks\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeeksNews extends Migration
{
    public function up()
    {
        Schema::create('ceeks_news_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->text('description');
            $table->text('short_description')->nullable();
            $table->string('slug', 255);
            $table->boolean('is_published')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceeks_news_');
    }
}
