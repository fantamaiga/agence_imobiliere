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
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->date('date_reclamations');
            $table->string('type_reclamation');
            $table->date('date_resolution');
            $table->string('description');
            $table->string('statut');
            $table->string('Action_Entreprise');
            $table->string('Commentaire');
            $table->unsignedBigInteger('agents_id')->constrained('agents')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('clients_id')->constrained('clients')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('biens_id')->constrained('biens')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reclamations');
    }
};
