<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('productId')->unique();
            $table->string('productModel');
            $table->string('productBrand');
            $table->float('productPrice');
            $table->enum('productStatus',['New','Reconditioned']);
            $table->enum('productCategory',['Computers','Consoles','Moviles','Others']);
            $table->text('productDescription');
            $table->integer('productStock');
            $table->string('productImg');
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
        Schema::dropIfExists('products');
    }
};
