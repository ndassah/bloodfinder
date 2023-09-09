<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Donneurs extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard='donneur';
    protected $fillable = [
        'nom',
        'prenom',
        'groupe',
        'location',
        'sexe',
        'numero',
        'cni',
        'email',
        'type',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isDonneur(){
        return $this->type === 'donneur';
    }
}










