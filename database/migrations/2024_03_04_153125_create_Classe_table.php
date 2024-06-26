<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Classe', function (Blueprint $table) {
            $table->id('idc');
            $table->string('libelle');
            $table->unsignedBigInteger('idformation');
            $table->integer('NombreMax');
            $table->foreign('idformation')->references('idf')->on('Formation');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_classes');
    }
};
