<?php namespace Ceeks\Carrers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeeksCarrers extends Migration
{
    public function up()
    {
        Schema::create('ceeks_carrers_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('location', 255);
            $table->boolean('published');
            $table->string('slug', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceeks_carrers_');
    }
}
