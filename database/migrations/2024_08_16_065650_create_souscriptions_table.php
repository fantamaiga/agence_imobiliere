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
        Schema::create('souscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('montant');
            $table->string('devise');
            $table->string('mode_paiement');
            $table->date('date_souscription');
            $table->date('date_expiration');
            $table->string('statut');
            $table->string('description');
            $table->unsignedBigInteger('clients_id')->constrained('clients')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('biens_id')->constrained('biens')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('contrats_id')->constrained('contrats')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('proprietaires_id')->constrained('proprietaires')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('agents_id')->constrained('agents')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('souscriptions');
    }
};
