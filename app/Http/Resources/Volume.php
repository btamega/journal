<?php

namespace App\Http\Resources;

use App\Models\Volumes;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Volume extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return Volumes::all();
    }
}
