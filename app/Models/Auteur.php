<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    use HasFactory;
    protected $primaryKey = "id_auteur";
    protected $fillable = [
        'id_auteur',
        'Nom',
        'Prenom',
        'stat',
        'created_at',
        'updated_at'
     ];
    public function articles()
    {
        return $this->belongsToMany(Articles::class,'new__editers','id_auteur','id_articles');
    }
}
