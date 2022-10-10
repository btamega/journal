<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuteurResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_auteur' => $this->id_auteur,
            'Nom' => $this->Nom,
            'Prenom' => $this->Prenom,
            'stat' => $this->stat,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
