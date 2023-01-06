<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransferRequest;
use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use App\Traits\CreateTransactions;
use App\Traits\UpdateSaldoReceiver;
use App\Traits\UpdateSaldoSender;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class NasabahController extends Controller
{
    use CreateTransactions, UpdateSaldoSender, UpdateSaldoReceiver;
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
        if (auth()->id() == $request->users_id_receiver) {
            return response()->json([
                'success' => false,
                'message' => 'Transfer Gagal!'
            ]);
        } else {
            $mySaldo = auth()->user()->saldo;
            if ($mySaldo <= $request->total) {
                return response()->json([
                    'success' => false,
                    'message' => 'Saldo anda tidak mencukupi!'
                ]);
            } else {
                $this->createTransactions($this->user->id, $request->users_receiver, $request->total);
            }
        }
    }

    public function getTransactionNasabah()
    {
        $transaction = Transaction::where('users_id_sender', $this->user->id)->orWhere('users_id_receiver', $this->user->id)->paginate(10);
        return TransactionResource::collection($transaction);
    }
}
