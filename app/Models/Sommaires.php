<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sommaires extends Model
{
    use HasFactory;
    protected $primaryKey = "id_sommaire";
    protected $fillable = [
        'id_sommaire',
        'Titre',
        'created_at',
        'updated_at'
     ];
     public function articles()
     {
        return $this->hasMany(NewArticles::class,'id_sommaire');
     }
    public function fascicules()
    {
        return $this->belongsToMany(Fascicules::class,'fascicule_sommaires','id_sommaire','id_fascicule');
    }
}
