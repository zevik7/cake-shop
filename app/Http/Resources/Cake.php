<?php

namespace App\Http\Resources;
use App\Models\Images;

use Illuminate\Http\Resources\Json\JsonResource;

class Cake extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            // 'desc' => $this->desc,
            'price' => $this->desc,
            'thumb' => $this->thumb()
        ];
    }
}
