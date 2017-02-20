<?php namespace Ceeks\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCeeksNewsAuthor extends Migration
{
    public function up()
    {
        Schema::rename('ceeks_news_category', 'ceeks_news_author');
        Schema::table('ceeks_news_author', function($table)
        {
            $table->renameColumn('title', 'name');
        });
    }
    
    public function down()
    {
        Schema::rename('ceeks_news_author', 'ceeks_news_category');
        Schema::table('ceeks_news_category', function($table)
        {
            $table->renameColumn('name', 'title');
        });
    }
}
