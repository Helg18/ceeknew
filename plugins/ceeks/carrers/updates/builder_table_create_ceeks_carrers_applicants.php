<?php namespace Ceeks\Carrers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeeksCarrersApplicants extends Migration
{
    public function up()
    {
        Schema::create('ceeks_carrers_applicants', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('career_id')->unsigned();
            $table->integer('applicant_id')->unsigned();
            $table->primary(['career_id','applicant_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceeks_carrers_applicants');
    }
}
