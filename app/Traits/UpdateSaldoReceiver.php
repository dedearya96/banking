<?php

namespace App\Traits;

use App\Models\User;

trait UpdateSaldoReceiver
{
    public function updateSaldoReceiver($users_id_receiver, $total)
    {
        $users = User::find($users_id_receiver);
        return $users->update([
            'saldo' => $users->saldo + $total
        ]);
    }
}
