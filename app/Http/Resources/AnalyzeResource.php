<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnalyzeResource extends JsonResource
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
            'date'=>$this->date,
            'url'=>$this->url,
            'user'=> new UserResource($this->whenLoaded('user')),
            'update_at'=>$this->update_at,
            'create_at'=>$this->delete_at

        ];
    }
}
