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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            
            $table->string('name')->nullable(false);
            $table->string('year')->nullable(false);
            $table->string('make')->nullable(false);
            $table->string('model')->nullable(false);
            $table->string('transmission')->nullable(false);
            $table->string('color')->nullable(false);
            $table->string('vin')->nullable();
            $table->string('license_plate')->nullable();
            $table->string('mileage')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamp('purchased_at')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
