<?php namespace Ceeks\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCeeksNews extends Migration
{
    public function up()
    {
        Schema::table('ceeks_news_', function($table)
        {
            $table->integer('author_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('ceeks_news_', function($table)
        {
            $table->dropColumn('author_id');
        });
    }
}
