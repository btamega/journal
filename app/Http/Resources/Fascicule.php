<?php

namespace App\Http\Resources;

use App\Models\Fascicules;
use App\Models\Volumes;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\DB;

class Fascicule extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return Fascicules::all();
    }
}
