<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewArticles extends Model
{
    use HasFactory;
    protected $primaryKey = "id_articles";
    protected $fillable = [
        'id_articles',
        'id_fascicule',
        'id_sommaire',
        'Titre',
        'Nbre_Page',
        'Lien_Telechargement',
        'created_at',
        'updated_at',
        'Date_Publication',
    ];
    public function auteurs()
    {
        return $this->belongsToMany(Auteur::class,'new__editers','id_articles','id_auteur');
    }
    public function sommaire()
    {
        return $this->belongsTo(Sommaires::class,'id_sommaire');
    }
}
