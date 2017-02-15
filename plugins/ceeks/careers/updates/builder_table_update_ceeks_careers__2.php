<?php namespace Ceeks\Careers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCeeksCareers2 extends Migration
{
    public function up()
    {
        Schema::table('ceeks_careers_', function($table)
        {
            $table->string('status')->default('ACTIVE');
        });
    }
    
    public function down()
    {
        Schema::table('ceeks_careers_', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
