<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estate extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    
    public function type() {
        return $this->belongsTo(Type::class, "type_id", "id");
    }
    public function trades() {
        return $this->belongsToMany(Trade::class, "client_estate_trades", "estate_id", 'trade_id');
    }
}
