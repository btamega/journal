<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fascicules extends Model
{
    use HasFactory;
    protected $primaryKey = "id_fascicule";
    protected $fillable = [
        'id_fascicule',
        'id_volume',
        'Nom',
        'Année',
        'numero',
        'Titre_Fascicule',
        'created_at',
        'updated_at'
     ];
    public function sommaires()
    {
        return $this->belongsToMany(Sommaires::class,'fascicule_sommaires','id_fascicule','id_sommaire');
    }
    public function vignettes()
    {
        return $this->hasMany(Vignettes::class,'id_fascicule');
    }
}
