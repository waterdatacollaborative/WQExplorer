<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SmartsConstructionParameters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smarts_construction_parameters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wdid');
            $table->string('application_id');
            $table->string('parameter');
            $table->string('result');
            $table->string('units');
            $table->string('owner_operator_name');
            $table->string('owner_operator_address');
            $table->string('owner_operator_city');
            $table->string('owner_operator_state');
            $table->string('owner_operator_zip');
            $table->string('owner_operator_contact');
            $table->string('owner_operator_contact_phone');
            $table->string('owner_operator_contact_email');
            $table->string('site_facility_name');
            $table->string('site_facility_address');
            $table->string('site_facility_city');
            $table->string('site_facility_state');
            $table->string('site_facility_zip');
            $table->string('site_facility_county');
            $table->double('latitude', 15, 10)->nullable();
            $table->double('longitude', 15, 10)->nullable();
            $table->timestamp('date_time_of_sample_collection');
            $table->string('risk');
            $table->string('program_type');
            $table->string('lrp_name');
            $table->string('lrp_email');
            $table->timestamps();
            
            $table->unique(['wdid','date_time_of_sample_collection','parameter','result']);
            $table->index(['parameter', 'result']);
            $table->index('date_time_of_sample_collection');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('smarts_construction_parameters');
    }
}
