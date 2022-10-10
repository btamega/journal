<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SommaireResource extends JsonResource
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
            'id_sommaire' => $this->id_sommaire,
            'Titre' => $this->Titre,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'articles' => ArticleResource::collection($this->whenLoaded('articles')),

        ];
    }
}
