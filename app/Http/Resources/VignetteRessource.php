<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VignetteRessource extends JsonResource
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
            'id_vignette' => $this->id_vignette,
            'Path' => $this->Path,
            'id_fascicule' => $this->id_fascicule,
            'Type' => $this->Type,

        ];
    }
}
