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
        Schema::create('billboards', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('type')->default('Billboard'); // Billboard, Semi Billboard, Baliho
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('size')->nullable();
            $table->string('orientation')->nullable();
            $table->string('maps_link')->nullable();
            $table->text('spesifikasi')->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('traffic_weekly_motor')->nullable();
            $table->integer('traffic_weekly_mobil')->nullable();
            $table->integer('traffic_weekly_bus')->nullable();
            $table->integer('traffic_weekly_truk')->nullable();
            
            $table->integer('traffic_monthly_motor')->nullable();
            $table->integer('traffic_monthly_mobil')->nullable();
            $table->integer('traffic_monthly_bus')->nullable();
            $table->integer('traffic_monthly_truk')->nullable();
            $table->string('image_area')->nullable();
            $table->string('image_denah')->nullable();
            $table->enum('status', ['draft', 'published'])->default('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billboards');
    }
};
