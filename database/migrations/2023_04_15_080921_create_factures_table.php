<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entreprise_id')->constrained('entreprises');
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('service_id')->constrained('services');
            $table->date('dateFacturation');
            $table->integer('montantFacture');
            $table->string('reference');
            $table->integer('numeroFacture');
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

        Schema::table("factures", function (Blueprint $table){

            $table->dropForeign("entreprise_id");
            $table->dropForeign("client_id");
            $table->dropForeign("service_id");
            });
        Schema::dropIfExists('factures');
    }
}
