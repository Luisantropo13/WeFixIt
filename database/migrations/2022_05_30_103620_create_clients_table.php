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
        Schema::create('clients', function (Blueprint $table) {
            $table->id('clientId')->unique();
            $table->string('clientName');
            $table->string('clientEmail');
            $table->string('clientPass');
            $table->string('clientPhone');
            $table->string('clientAdress');
            $table->date('clientBornDate');
            $table->string('clientImg');
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
        Schema::dropIfExists('clients');
    }
};
