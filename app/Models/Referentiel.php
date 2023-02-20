<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referentiel extends Model
{
    use HasFactory;
    protected $table = 'referentiels';
    protected $fillable=[
        "type_id",
        "Validated",
        "horaire"
    ];

    public function Type(){
        return $this->belongsTo(Type::class, "type_id", "id");
    }
}
