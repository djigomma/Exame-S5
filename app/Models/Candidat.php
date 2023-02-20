<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $table="candidats";
    protected $fillable=[
        'nom',
        'prenom',
        'email',
        'age',
        'niveauEtude',
        'sexe',
        'formation_id'
    ];
}
