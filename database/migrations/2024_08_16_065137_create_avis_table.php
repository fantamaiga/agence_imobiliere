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
            $table->integer('note');
            $table->string('Commentaire');
            $table->date('date');
            $table->unsignedBigInteger('biens_id')->constrained('biens')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('avis');
    }
};
