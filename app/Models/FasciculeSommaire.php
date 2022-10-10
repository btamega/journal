<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasciculeSommaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_fascicule_sommaire',
        'created_at',
        'updated_at',
        'id_fascicule',
        'id_sommaire',
    ];
}
