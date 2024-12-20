<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Formateur extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'password',
        'image',
        'cv',
        'attestation',
        'status',
        'is_validated',
        'bio',
        'solde'
    ];

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function compteFormateur()
    {
        return $this->hasOne(CompteFormateur::class);
    }

    public function avis()
    {
        return $this->hasMany(Avis::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
