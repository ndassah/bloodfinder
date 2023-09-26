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
        Schema::create('donneurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->string('type')->default('donateur');
            $table->string('numero',20);
            $table->string('location',100);
            $table->string('email',191)->unique();
            $table->string('cni',20);
            $table->string('password',255);
            $table->enum('sexe',['homme','femme']);
            $table->enum('groupe',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->integer('age')->default(18);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donneurs');
    }
};
