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
            'users_id_sender' => $this->users_id_sender,
            'users_id_receiver' => $this->users_id_receiver,
            'total' => $this->total,
            'time' => $this->created_at,
        ];
    }
}
