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
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unidade')->constrained('unidades');
            $table->foreignId('medico')->constrained('medicos');
            $table->date('data');
            $table->boolean('t_m')->default(false);
            $table->boolean('t_t')->default(false);
            $table->boolean('t_n')->default(false);
            $table->timestamps();
    
            $table->unique(['medico', 'data', 't_m', 't_t', 't_n']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos');
    }
};
