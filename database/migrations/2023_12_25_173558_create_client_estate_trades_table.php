<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });
        Schema::create('client_estate_trades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('trade_id');
            
            $table->unsignedBigInteger('role_id')->nullable();


            $table->index('role_id', 'role_client_trade_idx');
            $table->index('client_id', 'client_trade_client_idx');
            $table->index('trade_id', 'client_trade_trade_idx');
            

            $table->foreign('role_id', 'role_trade_role_fk')->on('roles')->references('id');
            $table->foreign('client_id', 'client_trade_client_fk')->on('clients')->references('id');
            $table->foreign('trade_id', 'client_trade_trade_fk')->on('trades')->references('id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('client_estate_trades');
    }
};
