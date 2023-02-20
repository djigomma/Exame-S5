<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table="formations";
    protected $fillable=[
        'nom',
        'duree',
        'description',
        'referentiel_id',
        'isStarted',
        'date_debut'
    ];
}
