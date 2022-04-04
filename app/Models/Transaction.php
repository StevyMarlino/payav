<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'type',
        'amount',
        'status',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public static function isPending()
    {
        return Transaction::where('status',0)
            ->where('user_id',auth()->id())
            ->count();
    }

    public static function isCompleted()
    {
        return Transaction::where('status',1)
            ->where('user_id',auth()->id())
            ->count();
    }
}
