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
        Schema::table('estates', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id')->after('price');
            $table->index('type_id', 'estate_type_idx');
            $table->foreign('type_id', 'estate_type_fk')->on('types')->references('id');
        });
        Schema::table('client_estate_trades', function (Blueprint $table) {
            $table->unsignedBigInteger('estate_id')->after('role_id');
            $table->index('estate_id', 'estate_trade_estate_idx');
            $table->foreign('estate_id', 'estate_trade_trade_fk')->on('estates')->references('id');
        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('estates', function (Blueprint $table) {
            $table->dropForeign(['type_id']);   
            $table->dropColumn('type_id');
        });
    }
};
