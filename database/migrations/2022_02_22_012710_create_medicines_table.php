<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string("medicine_name",100);
            $table->string("medicine_form",100);
            $table->string("medicine_formula",100);
            $table->bigInteger("medicine_price");
            $table->string("description",300);
            $table->tinyInteger("faskes_1");
            $table->tinyInteger("faskes_2");
            $table->tinyInteger("faskes_3");
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
        Schema::dropIfExists('medicines');
    }
}
