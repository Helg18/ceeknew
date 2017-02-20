<?php namespace Ceeks\Carrers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCeeksCarrers extends Migration
{
    public function up()
    {
        Schema::table('ceeks_carrers_', function($table)
        {
            $table->integer('category_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('ceeks_carrers_', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
