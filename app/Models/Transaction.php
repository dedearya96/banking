<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['users_id_sender, users_id_receiver', 'total'];

    public function users_sender()
    {
        return $this->belongsTo(User::class, 'users_id_sender');
    }

    public function users_receiver()
    {
        return $this->belongsTo(User::class, 'users_id_receiver');
    }
}
