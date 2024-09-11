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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->integer('montant');
            $table->date('date_paiement');
            $table->string('mode_paiement');
            $table->string('devise');
            $table->string('statut');
            $table->string('description');
            $table->unsignedBigInteger('transactions_id')->constrained('transactions')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('clients_id')->constrained('clients')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('proprietaires_id')->constrained('proprietaires')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
