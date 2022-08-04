<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Packageapi extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = null;
    public function toArray($request)
    {
        // return parent::toArray($request);
      

        return [
            "id" => $this->id,
            "user_id" => $this->user_id,
            "company_id" =>$this->company_id,
            "name" => $this->name,
            "quantity" => $this->quantity,
            "category" => $this->category,
        ];
     
    }
}
