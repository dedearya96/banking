<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
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
            'no-rek' => $this->id,
            'status' => $this->role,
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'saldo' => number_format($this->saldo),
            'createdAt' => $this->created_at,
        ];
    }
}
