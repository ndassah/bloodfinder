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
        Schema::create('hopitales', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->string('numero',20);
            $table->string('type')->default('hopital');
            $table->string('location',100);
            $table->string('email',191)->unique();
            $table->string('matricule',20);
            $table->string('password',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hopitales');
    }
};
