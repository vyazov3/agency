<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use Filterable;
    use SoftDeletes;
    protected $table = "clients";
    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    public function trades() {
        return $this->belongsToMany(Trade::class, "client_estate_trades", "client_id", "trade_id");
    }
}
