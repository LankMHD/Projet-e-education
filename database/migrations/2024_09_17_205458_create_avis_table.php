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
        Schema::create('avis', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('etudiant_id')->constrained()->onDelete('cascade');
            // $table->foreignId('formation_id')->constrained()->onDelete('cascade');
            // $table->tinyInteger('note')->unsigned()->nullable(); // Note de 1 à 5
            // $table->text('commentaire')->nullable(); //
            // Clé étrangère pour 'etudiant_id' pointant sur la table 'etudiants'
            $table->unsignedBigInteger('etudiant_id');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
            
            // Clé étrangère pour 'formation_id' pointant sur la table 'formations'
            $table->unsignedBigInteger('formation_id');
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis');
    }
};