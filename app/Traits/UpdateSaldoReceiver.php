<?php

namespace App\Traits;

use App\Models\User;

trait UpdateSaldoReceiver
{
    public function updateSaldoReceiver($users_id_receiver, $total)
    {
        return User::find($users_id_receiver)->update([
            'saldo' => ''
        ]);
    }
}
