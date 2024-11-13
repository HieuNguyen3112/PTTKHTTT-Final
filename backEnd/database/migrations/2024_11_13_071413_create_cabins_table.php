<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabinsTable extends Migration
{
    public function up()
    {
        Schema::create('cabins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('capacity'); 
            $table->decimal('price', 10, 2); 
            $table->decimal('discount', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cabins');
    }
}