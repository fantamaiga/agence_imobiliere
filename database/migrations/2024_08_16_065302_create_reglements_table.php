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
        Schema::create('reglements', function (Blueprint $table) {
            $table->id();
            $table->integer('montant');
            $table->string('devise');
            $table->date('date_paie');
            $table->string('mode_paie');
            $table->date('periode_louer');
            $table->string('reference');
            $table->string('statut');
            $table->string('description');
            $table->unsignedBigInteger('bails_id')->constrained('bails')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('clients_id')->constrained('clients')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('biens_id')->constrained('biens')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('contrats_id')->constrained('contrats')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reglements');
    }
};
