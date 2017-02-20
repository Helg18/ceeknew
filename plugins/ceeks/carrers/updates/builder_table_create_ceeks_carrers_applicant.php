<?php namespace Ceeks\Carrers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeeksCarrersApplicant extends Migration
{
    public function up()
    {
        Schema::create('ceeks_carrers_applicant', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->string('linked_profile', 255)->nullable();
            $table->string('resume_cv', 255);
            $table->string('cover_letter', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceeks_carrers_applicant');
    }
}
