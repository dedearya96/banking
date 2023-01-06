<?php

namespace App\Traits;

use App\Models\Transaction;

trait CreateTransactions
{
    public function createTransactions($users_id_sender, $users_id_receiver, $total)
    {
        return Transaction::create([
            'users_id_sender' => $users_id_sender,
            'users_id_receiver' => $users_id_receiver,
            'total' => $total
        ]);
    }
}
