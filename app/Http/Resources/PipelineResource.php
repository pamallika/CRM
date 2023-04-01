<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PipelineResource extends JsonResource
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
            'account_id' => $this->account_id,
            'user_id' => $this->user_id,
        ];
    }
}
