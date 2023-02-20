<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table="types";
    protected $fillable = [
        "libelle"
    ];
    public function Referentiel(){
        return $this->hasMany(Referentiel::class, "type_id", "id");
    }
}
