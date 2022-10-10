<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArchiveResource extends JsonResource
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
            'id_volume' => $this->id_volume,
            'Titre' => $this->Titre,
            'Année' => $this->Année,
            'cover' => $this->cover,
            'Nom_Volume' => $this->Nom_Volume,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'fascicules' => FasciculeResource::collection($this->whenLoaded('fascicules')),
            
        ];
    }
}
