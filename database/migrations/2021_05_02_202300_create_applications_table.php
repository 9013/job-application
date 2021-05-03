<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('contact');
            $table->string('gender');
            $table->string('education');
            $table->string('board');
            $table->string('year');
            $table->string('result');
            $table->string('we_company');
            $table->string('we_designation');
            $table->string('we_date_from');
            $table->string('we_date_to');
            $table->string('known_lang');
            $table->string('rws');
            $table->string('technical_expirience');
            $table->string('bme');
            $table->string('preference_location');
            $table->string('expected_ctc');
            $table->string('current_ctc');
            $table->string('notice_period');                        
            $table->integer('status');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
