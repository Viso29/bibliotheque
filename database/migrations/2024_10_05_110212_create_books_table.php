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
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('title', 255); // Titre du livre
            $table->foreignId('author_id')->constrained('authors'); // Clé étrangère pour l'auteur
            $table->foreignId('categories_id')->constrained('categories'); // Clé étrangère pour la catégorie
            $table->string('isbn', 13)->unique(); // ISBN unique du livre
            $table->year('published_year'); // Année de publication
            $table->foreignId('publisher_id')->constrained('publishers'); // Clé étrangère pour l'éditeur
            $table->integer('quantity'); // Quantité totale de copies du livre
            $table->integer('available'); // Quantité disponible à l'emprunt
            $table->timestamps(); // Champs de suivi created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
