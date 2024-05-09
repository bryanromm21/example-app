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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->date('fecha_nacimiento');
            $table->integer('CI')-> unique();
            $table->string('sexo');
            $table->text('email')-> unique();
            $table->integer('contacto_enmergencia');
            $table->unsignedBigInteger('cargos_id');
            $table->foreign('cargos_id')->references('id')->on('cargos')-> onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
