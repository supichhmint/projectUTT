<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTripIdToTriproundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('triprounds', function (Blueprint $table) {
            $table->integer('trip_id')->unsigned();

    $table->foreign('trip_id')->references('id')->on('trips');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('triprounds', function (Blueprint $table) {
            //
        });
    }
}
