<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGrupoclientesClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function(Blueprint $table){
            $table->integer('id_categoriacliente')->unsigned()->default(1);
            $table->foreign('id_categoriacliente')->references('id')->on('grupoclientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function(Blueprint $table){
            $table->removeColumn('id_categoriacliente');
        });
    }
}
