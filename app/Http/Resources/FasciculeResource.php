<?php

namespace App\Http\Resources;

use App\Models\Fascicules;
use Illuminate\Http\Resources\Json\JsonResource;

class FasciculeResource extends JsonResource
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
            'id_fascicule' => $this->id_fascicule,
            'id_volume' => $this->id_volume,
            'Nom' => $this->Nom,
            'Année' => $this->Année,
            'numero' => $this->numero,
            'Titre_Fascicule' => $this->Titre_Fascicule,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'sommaires' => SommaireResource::collection($this->whenLoaded('sommaires')),
            'vignettes' => VignetteRessource::collection($this->whenLoaded('vignettes')),

        ];
    }
}
