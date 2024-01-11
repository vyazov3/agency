<?php

use App\Http\Controllers\Client\ClientTradeController;
use App\Http\Controllers\Client\CreateController;
use App\Http\Controllers\Client\DestroyController;
use App\Http\Controllers\Client\EditController;
use App\Http\Controllers\Client\IndexController;
use App\Http\Controllers\Trade\IndexController as TIndexController;
use App\Http\Controllers\Client\ShowController;
use App\Http\Controllers\Client\StoreController;
use App\Http\Controllers\Trade\StoreController as TStoreController;
use App\Http\Controllers\Trade\TradeClientEstateController as TCEController;
use App\Http\Controllers\Trade\StoreClientTradeController as SCTController;
use App\Http\Controllers\Client\UpdateController;
use App\Http\Controllers\Estate\IndexController as EIndexController;
use App\Http\Controllers\Estate\EstateTradeController as ETradeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('api/v1')->group(function () {
    Route::group(['namespace' => 'App\Http\Controllers\Client'], function () {
        Route::get('/clients', [IndexController::class, 'index'])->name('client.index');
        Route::get('/clients/create', [CreateController::class, 'create'])->name('client.create');
        Route::post('/clients/store', [StoreController::class, 'store'])->name('client.store');
        Route::get('/clients/{client}/edit', [EditController::class, 'edit'])->name('client.edit')->where('client', '[0-9]+');
        Route::get('/clients/{client}', [ShowController::class, 'show'])->name('client.show')->where('client', '[0-9]+');
        Route::get('/clients/{client}/trades', [ClientTradeController::class, 'trade'])->name('client.trade')->where('client', '[0-9]+');
        Route::patch('/clients/{client}', [UpdateController::class, 'update'])->name('client.update')->where('client', '[0-9]+');
        Route::delete('/clients/{client}', [DestroyController::class, 'destroy'])->name('client.delete')->where('client', '[0-9]+');
    });
    Route::group(['namespace' => 'App\Http\Controllers\Estate'], function () {
        Route::get('/estates', [EIndexController::class, 'index'])->name('estate.index');
        Route::get('/estates/{estate}/trades', [ETradeController::class, 'trade'])->name('estate.trade')->where('estate', '[0-9]+');
    });
    Route::group(['namespace' => 'App\Http\Controllers\Trade'], function () {
        Route::get('/trades', [TIndexController::class, 'index'])->name('trade.index');
        Route::get('/trades/{trade}/clients/estates', [TCEController::class, 'show'])->name('trade.client.object')->where('trade', '[0-9]+');
        Route::post('/trades/store', [TStoreController::class, 'store'])->name('trade.store');
        Route::post('/trades/clients-estates/store', [SCTController::class, 'store'])->name('trade.client.object.store');
    });
});
