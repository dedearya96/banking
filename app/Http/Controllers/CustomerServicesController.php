<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransferRequest;
use App\Http\Resources\TransactionResource;
use App\Http\Resources\UsersResource;
use App\Models\Transaction;
use App\Models\User;
use App\Traits\CreateTransactions;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class CustomerServicesController extends Controller
{
    use CreateTransactions;
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = JWTAuth::parseToken()->authenticate();
            return $next($request);
        });
    }

    public function transferFromCustomer(TransferRequest $request)
    {
        $this->createTransactions($this->user->id, $request->users_receiver, $request->total);
    }

    public function getTransactionCustomer()
    {
        $transaction = Transaction::where('users_id_sender', $this->user->id)->orWhere('users_id_receiver', $this->user->id)->paginate(10);
        return TransactionResource::collection($transaction);
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
