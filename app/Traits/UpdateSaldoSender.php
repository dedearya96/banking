<?php

namespace App\Traits;

use App\Models\User;

trait UpdateSaldoSender
{
    public function updateSaldoSender($users_id_sender, $total)
    {
        return User::find($users_id_sender)->update([
            'saldo' => ''
        ]);
    }
}
