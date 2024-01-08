<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientEstateTrade extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function estates() {
        return $this->belongsToMany(Estate::class, 'client_estate_trades', 'trade_id',  'estate_id')
        ->with('type');
    }
}
