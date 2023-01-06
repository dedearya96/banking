<?php

namespace App\Traits;

use App\Models\User;

trait UpdateSaldoSender
{
    public function updateSaldoSender($users_id_sender, $total)
    {
        $users = User::find($users_id_sender);
        return $users->update([
            'saldo' => $users->saldo - $total
        ]);
    }
}
