<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgentResource extends JsonResource
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
            'agent_id' => $this->agent_id,
            'agent_name' => $this->fullName,
            'agent_contact' => $this->phoneNumber,
            'agent_address' => $this->address,
            'profile_pic' => $this->agent_profileUrl,
        ];
    }
}
