<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Fascicule;
class VolumeResource extends JsonResource
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
            'Nom_Volume' => $this->Nom_Volume,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Fascicule;
class VolumeResource extends JsonResource
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
            'Nom_Volume' => $this->Nom_Volume,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
