<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Hopitale extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard='hopital';
    protected $fillable = [
        'nom',
        'location',
        'numero',
        'matricule',
        'email',
        'classification',
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
    public function isHopital(){
        return $this->type === 'hopital';
    }
}
