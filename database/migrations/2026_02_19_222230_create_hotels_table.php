<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        $table->string('address')->nullable();
        $table->string('city')->nullable();
        $table->string('country')->nullable();
        $table->string('email')->nullable();
        $table->string('phone')->nullable();
        $table->unsignedTinyInteger('stars')->default(0); // nombre d'étoiles

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
        Schema::dropIfExists('hotels');
    }
}
