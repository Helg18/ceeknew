<?php namespace Ceeks\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeeksNewsAuthors extends Migration
{
    public function up()
    {
        Schema::create('ceeks_news_authors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('author_id')->unsigned();
            $table->integer('news_id');
            $table->primary(['author_id','news_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceeks_news_authors');
    }
}
