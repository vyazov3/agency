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
        Schema::create('estate_clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estate_id');
            $table->unsignedBigInteger('client_id');


            $table->index('client_id', 'client_estate_client_idx');
            $table->index('estate_id', 'client_estate_estate_idx');

            $table->foreign('client_id', 'client_estate_client_fk')->on('clients')->references('id');
            $table->foreign('estate_id', 'client_estate_estate_fk')->on('estates')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estate_clients');
    }
};
