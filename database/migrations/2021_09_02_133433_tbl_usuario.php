<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class TblUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create(('tbl_tipo_usuario'),
        function ( Blueprint $table){
            $table->increments('id_tipo');
            $table->string('tipo');
          

        });

        DB::table('tbl_tipo_usuario')->insert(
            array(
               
                'tipo' => 'prueba'
            ),
            array(
               
                'tipo' => 'prueba2'
            )
        );

        Schema::create(('tbl_usuario'),
        function( Blueprint  $table){
            $table->increments('id_user');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('id_tipo')->unsigned();
            $table->string('correo')->unique();
            $table->boolean('confirmacion');
            $table->string('vkey');
            $table->string('password');
            $table->foreign('id_tipo')->references('id_tipo')->on('tbl_tipo_usuario');

        });


       


        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
