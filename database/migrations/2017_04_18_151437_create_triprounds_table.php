<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriproundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triprounds', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_date');
            $table->date('departure_date');
            $table->double('price_child',9,2);
            $table->double('price_adult',9,2);
            $table->integer('amount_seats');
            $table->longtext('triprounds_description');

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
        Schema::dropIfExists('triprounds');
    }
}
