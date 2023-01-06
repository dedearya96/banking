<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'id_tran' => $this->id,
            'sender' => new TitleUsersResource($this->users_sender),
            'receiver' => new TitleUsersResource($this->users_receiver),
            'total' => number_format($this->total),
            'time' => $this->created_at,
        ];
    }
}
