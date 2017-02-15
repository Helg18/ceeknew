<?php namespace Ceeks\Careers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeeksCareersCategory extends Migration
{
    public function up()
    {
        Schema::create('ceeks_careers_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceeks_careers_category');
    }
}
