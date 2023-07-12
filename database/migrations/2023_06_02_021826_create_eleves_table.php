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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('Prenom');
            $table->string('sexe');
            $table->string('image');
            $table->string('date_naissance');
            $table->string('lieu_naissance');
            $table->string('classe');
            $table->string('nom_pere')->nullable();
            $table->string('nom_mere')->nullable();
            $table->string('telephone1');
            $table->string('telephone2')->nullable();
            $table->string('email')->nullable();
            $table->string('adresse');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('eleves');
    }
};
