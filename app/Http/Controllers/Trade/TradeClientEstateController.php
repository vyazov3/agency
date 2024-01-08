<?php

namespace App\Http\Controllers\Trade;

use App\Http\Controllers\Controller;
use App\Models\ClientEstateTrade;
use App\Models\Estate;
use App\Models\Trade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TradeClientEstateController extends BaseController
{
    public function show(Trade $trade) {
        // $estates = Trade::findOrfail($trade->id)->estates;
        $clients = Trade::findOrfail($trade->id)->clients;
        $estates = Trade::findOrfail($trade->id)->estates;
        $roles = Trade::findOrfail($trade->id)->roles;
        // $info = $clients->merge($estates);
        // $merg = $info->merge($trade);
        // $info = DB::table("client_trades")
        // ->select('clients.first_name', 'clients.last_name', 'roles.title', 'estates.address')
        // // ->select('trade_estates.estate_id', 'client_id', 'role_id')
        // ->join("clients","clients.id","=","client_trades.client_id")
        // ->join("roles","roles.id","=","client_trades.role_id")
        // ->join("trade_estates","client_trades.trade_id","=","trade_estates.trade_id")
        // ->join("estates","estates.id","=","trade_estates.estate_id")
        // ->where("trade_estates.trade_id", '=', $trade->id)
        // ->distinct()
        // ->get();
        // // $clients = Trade::findOrFail($trade->id)->clients;
        // $estates = Estate::findOrFail($trade->id)->estates;
        return response()->json(['clients' => $clients, 'estates' => $estates, 'trade' => $trade, 'roles' => $roles]);
    }
}
