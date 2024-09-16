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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('chemin_document');
            $table->string('titre');
            $table->string('description');
            $table->date('date_creation');
            $table->date('date_expiration');
            $table->string('statut');
            $table->string('version');
            $table->date('date_modification');
            $table->string('cree_par:');
            $table->string('modifie_par:');
            $table->string('tags');
            $table->string('confidentialite');
            $table->unsignedBigInteger('contrats_id')->constrained('contrats')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('biens_id')->constrained('biens')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('proprietaires_id')->constrained('proprietaires')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('clients_id')->constrained('clients')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('agents_id')->constrained('agents')->cascadeOnUpdate()->cascadeOnDelete();
          //  $table->softDeletes(); // pour supprimer les données sans supprimer les enregistrements liés dans d'autres tables.
           // $table->rememberToken(); // pour générer un jeton d'authentification à chaque utilisateur.
            $table->unsignedBigInteger('bails_id')->constrained('bails')->cascadeOnUpdate()->cascadeOnDelete(); // pour lier le document à une notification.

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
