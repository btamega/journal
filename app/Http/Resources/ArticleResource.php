<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'id_articles' => $this->id_articles,
            'id_fascicule' => $this->id_fascicule,
            'id_sommaire' => $this->id_sommaire,
            'Titre' => $this->Titre,
            'Nbre_Page' => $this->Nbre_Page,
            'Lien_Telechargement' => $this->Lien_Telechargement,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'Date_Publication' => $this->Date_Publication,
            'auteurs' => AuteurResource::collection($this->whenLoaded('auteurs')),
        ];
    }
}
