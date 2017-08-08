<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelagencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelagency', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agency_name_contact');
            $table->string('agency_contact_phone');
            $table->string('agency_contact_email');
            $table->string('agency_password');
            $table->string('agency_name_th');
            $table->string('agency_name_en');
            $table->string('agency_license');
            $table->string('agency_iata_no');
            $table->string('agency_tax_id');
            $table->text('agency_address');
            $table->string('agency_province');
            $table->string('agency_zipcode');
            $table->string('agency_tel1');
            $table->string('agency_tel2')->nulltable();
            $table->string('agency_fax')->nulltable();
            $table->string('agency_email');
            $table->string('agency_web')->nulltable();
            $table->string('agency_fb')->nulltable();
            $table->longText('agency_description');
            $table->timestamp('register_date');
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
        Schema::dropIfExists('travelagency');
    }
}
