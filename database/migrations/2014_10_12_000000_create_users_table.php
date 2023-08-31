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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->string('numero',12);
            $table->string('location',100);
            $table->string('cni',20);
            $table->string('matricule',20);
            $table->enum('sexe',['homme','femme']);
            $table->enum('groupe',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->enum('user_types',['donneurs','hopitale']);
            $table->string('email',191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
