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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->date('date_ajout');
            $table->string('type_biens');
            $table->string('commune');
            $table->string('ville');
            $table->string('quartier');
            $table->string('superficie');
            $table->integer('nombre_piece');
            $table->integer('nombre_chambre');
            $table->integer('nbr_salle_de_bain');
            $table->string('description');
            $table->string('mode_paiement');
            $table->integer('prix');
            $table->string('devise');
            $table->string('commission');
            $table->string('observation');
            $table->string('statut');
            $table->string('images');
            $table->string('videos');
            $table->unsignedBigInteger('proprietaire_id')->constrained('proprietaires')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
