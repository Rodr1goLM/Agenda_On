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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medico')->constrained('medicos')->onDelete('cascade');
            $table->date('dia');
            $table->boolean('h_00')->default(false);
            $table->boolean('h_01')->default(false);
            $table->boolean('h_02')->default(false);
            $table->boolean('h_03')->default(false);
            $table->boolean('h_04')->default(false);
            $table->boolean('h_05')->default(false);
            $table->boolean('h_06')->default(false);
            $table->boolean('h_07')->default(false);
            $table->boolean('h_08')->default(false);
            $table->boolean('h_09')->default(false);
            $table->boolean('h_10')->default(false);
            $table->boolean('h_11')->default(false);
            $table->boolean('h_12')->default(false);
            $table->boolean('h_13')->default(false);
            $table->boolean('h_14')->default(false);
            $table->boolean('h_15')->default(false);
            $table->boolean('h_16')->default(false);
            $table->boolean('h_17')->default(false);
            $table->boolean('h_18')->default(false);
            $table->boolean('h_19')->default(false);
            $table->boolean('h_20')->default(false);
            $table->boolean('h_21')->default(false);
            $table->boolean('h_22')->default(false);
            $table->boolean('h_23')->default(false);
            $table->timestamps();

            $table->unique(['medico', 'dia']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
