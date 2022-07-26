<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'account_id',
        'type',
        'amount',
        'status',
        'user_id',
        'code_transaction',
        'payment_methode',
        'identity',
        'currency'
    ];

    public static function cancel($code)
    {
        $trans= Transaction::whereCodeTransaction($code)->first();
        $trans->status = 0;
        $trans->save();
    }
    public static function complete($code)
    {
        $trans= Transaction::whereCodeTransaction($code)->first();
        $trans->status= 1;
        $trans->save();
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function isPending()
    {
        return Transaction::where('status', 0)
            ->where('user_id', auth()->id())
            ->count();
    }

    public static function isCompleted()
    {
        return Transaction::where('status', 1)
            ->where('user_id', auth()->id())
            ->count();
    }

    public static function countExchange()
    {
        return Transaction::where('type', 'EXCHANGE')
            ->where('user_id', auth()->id())
            ->count();
    }

    public static function countDeposit()
    {
        return Transaction::where('type', 'DEPOSIT')
            ->where('user_id', auth()->id())
            ->count();
    }

    public static function countWithdraw()
    {
        return Transaction::where('type', 'WITHDRAW')
            ->where('user_id', auth()->id())
            ->count();
    }

    public static function amountWithdrawTotal()
    {
        return Transaction::where('user_id', auth()->id())
            ->where('type', 'WITHDRAW')
            ->sum('amount');
    }

    public static function amountDepositTotal()
    {
        return Transaction::where('type', 'DEPOSIT')
            ->where('user_id', auth()->id())
            ->sum('amount');
    }

    public static function amountExchangeTotal()
    {
        return Transaction::where('type', 'EXCHANGE')
            ->where('user_id', auth()->id())
            ->sum('amount');
    }

    public static function myExchangeTransaction()
    {
        return Transaction::where('user_id', auth()->id())
            ->where('type', 'EXCHANGE')
            ->get();
    }

    public static function myWithdrawOrDepositTransaction()
    {
        return Transaction::where('user_id', auth()->id())
            ->where(function (Builder $query) {
                $query->where('type', 'DEPOSIT')
                    ->orWhere('type', 'WITHDRAW');
            })
            ->get();
    }
}
