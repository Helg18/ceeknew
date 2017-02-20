<?php namespace Ceeks\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCeeksNewsCategory extends Migration
{
    public function up()
    {
        Schema::table('ceeks_news_category', function($table)
        {
            $table->string('title', 255);
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::table('ceeks_news_category', function($table)
        {
            $table->dropColumn('title');
            $table->dropColumn('slug');
        });
    }
}
