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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('series_pass')->nullable();
            $table->string('number_pass')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            
            $table->unsignedBigInteger('category_id')->default(1);
            $table->index('category_id', 'client_category_idx');
            $table->foreign('category_id', 'client_category_fk')->on('categories')->references('id');

            $table->timestamps();

            $table->softDeletes();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('clients');
    }
};
