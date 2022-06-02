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
        Schema::create('workers', function (Blueprint $table) {
            $table->id('workerId')->unique();
            $table->string('workerName');
            $table->string('workerEmail');
            $table->string('workerPass');
            $table->string('workerPhone');
            $table->string('workerAdress');
            $table->date('workerBornDate');
            $table->set('workerPlace',['Network Installer','Adviser','Repairman']);
            $table->string('workerPhoto');
            $table->foreignId('companyId');
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
        Schema::dropIfExists('workers');
    }
};
