<?php

namespace App\Http\Resources;

use App\Models\NewArticles;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Article extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return NewArticles::all();
    }
}
