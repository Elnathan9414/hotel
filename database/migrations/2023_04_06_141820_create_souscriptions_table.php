<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSouscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('serviceSouscrit')->constrained('services');
            $table->foreignId('clientsouscrit')->constrained('clients');
            $table->date('datedebut');
            $table->date('datefin');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("souscriptions", function (Blueprint $table){

            $table->dropForeign("serviceSouscrit");
            $table->dropForeign("clientsouscrit");
            });
        Schema::dropIfExists('souscriptions');
    }
}
