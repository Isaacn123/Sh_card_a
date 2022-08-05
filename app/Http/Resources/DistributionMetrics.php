<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DistributionMetrics extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
          
                "agent_id" => $this-> agent_id,
                "card_scanned" => $this->card_sequence,
                "beneficiary" => $this->beneficiary_name,
                "delivered_at" => $this->created_at
              
        ];
    }
}
