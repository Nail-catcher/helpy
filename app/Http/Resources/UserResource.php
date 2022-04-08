<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id'=>$this->id,
            'first_name' => $this->first_name,
            'second_name' => $this->second_name,
            'middle_name' => $this->middle_name,
            'short_name' => $this->short_name,
            'birth'=>$this->birth,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'analyzes'=> new AnalyzesResource($this->whenLoaded('analyzes')),


        ];
    }
}
