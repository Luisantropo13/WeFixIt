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
        Schema::create('service_lines', function (Blueprint $table) {
            $table->id('serviceLinesId')->unique();
            $table->integer('serviceLinesQuantity');
            $table->foreignId('serviceId');
            $table->foreignId('billId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_lines');
    }
};
