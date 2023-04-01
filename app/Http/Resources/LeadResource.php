<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeadResource extends JsonResource
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
            'cost' => $this->cost,
            'company_id' => $this->company_id,
            'pipeline_id' => $this->pipeline_id,
            'stage_id' => $this->stage_id,
            'account_id' => $this->account_id,
            'user_id' => $this->user_id,
        ];
    }
}
