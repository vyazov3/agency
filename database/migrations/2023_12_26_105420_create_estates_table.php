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
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            
            // $table->unsignedBigInteger('owner_id');
            // $table->index('owner_id', 'client_estates_idx');
            // $table->foreign('owner_id', 'client_estates_fk')->on('clients')->references('id');

            $table->text('description');
            $table->text('address');
            $table->decimal('area',8,2)->nullable();
            $table->unsignedTinyInteger('count_room')->nullable();
            $table->boolean('is_sell')->default(true);
            $table->unsignedDecimal('price', 30,2);


            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estates');
    }
};