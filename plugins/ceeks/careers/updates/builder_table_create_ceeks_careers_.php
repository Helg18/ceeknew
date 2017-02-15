<?php namespace Ceeks\Careers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeeksCareers extends Migration
{
    public function up()
    {
        Schema::create('ceeks_careers_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->text('description');
            $table->string('location', 255);
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceeks_careers_');
    }
}
