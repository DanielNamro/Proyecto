<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tops', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Id_Categoria');
            $table->integer('Id_User');
            $table->string('Description');
            $table->string('pn1');
            $table->string('pn2');
            $table->string('pn3');
            $table->string('p1');
            $table->string('p2');
            $table->string('p3');
            $table->string('enlace');
            $table->string('enlace2');
            $table->string('enlace3');
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
        Schema::dropIfExists('tops');
    }
}
