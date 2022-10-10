<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volumes extends Model
{
    use HasFactory;
    protected $primaryKey = "id_volume";
    protected $fillable = [
       'id_volume',
       'created_at',
       'updated_at'
    ];

    public function fascicules()
    {
        return $this->hasMany(Fascicules::class,'id_volume');
    }
}
