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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['demande','dons']);
            $table->enum('groupe',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->string('location',100);
            $table->string('nom',100);
            $table->string('numero',20);
            $table->string('message',100);
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
