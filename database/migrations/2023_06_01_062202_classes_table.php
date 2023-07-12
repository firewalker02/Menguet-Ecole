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
    public function up(): void
    {
        Schema::create('classe', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('enseignant')->unique();
            $table->string('nbre_elve');
            $table->string('frais_inscription');
            $table->string('frais_scolariter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('classe');
    }
};
