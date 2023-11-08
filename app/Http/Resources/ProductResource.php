<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class ProductResource extends JsonResource
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
            'type' => $this->category->name ?? '',
            'publish' => $this->publish ?? '',
            'qr_name' => $this->qr_name ?? '',
            'image' => $this->image ? env('APP_URL').'/img/fire_vehicles/'.json_decode($this->image)[0] : '',
        ];
    }
}
