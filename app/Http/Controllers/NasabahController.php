<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransferRequest;
use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class NasabahController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = JWTAuth::parseToken()->authenticate();
            return $next($request);
        });
    }

    public function transferFromNasabah(TransferRequest $request)
    {
    }

    public function getTransactionNasabah()
    {
        $transaction = Transaction::where('users_id_sender', $this->user->id)->orWhere('users_id_receiver', $this->user->id)->paginate(10);
        return TransactionResource::collection($transaction);
    }
}
