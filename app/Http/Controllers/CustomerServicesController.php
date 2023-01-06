<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\Http\Resources\UsersResource;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerServicesController extends Controller
{
    public function __construct()
    {
        
    }
    
    public function transferFromCustomer()
    {
    }

    public function getTransactionCustomer()
    {
    }

    public function getAllTransaction()
    {
        $transaction = Transaction::paginate(20);
        return TransactionResource::collection($transaction);
    }

    public function getAllNasabah()
    {
        $nasabah = User::where('role', 'nasabah')->paginate(20);
        return UsersResource::collection($nasabah);
    }
}
