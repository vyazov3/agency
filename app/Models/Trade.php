<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function roles() {
        return $this->belongsToMany(Role::class, 'client_estate_trades', 'trade_id', 'role_id');
    }
    public function clients() {
        return $this->belongsToMany(Client::class, 'client_estate_trades', 'trade_id', 'client_id')
        ->with('category')
        ->withPivot('role_id')
        ->withPivot('estate_id')
        ->withPivot('trade_id');
    }
    public function estates() {
        return $this->belongsToMany(Estate::class, 'client_estate_trades', 'trade_id',  'estate_id')
        ->with('type');
    }
}
