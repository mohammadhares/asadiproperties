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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('thumbnail');
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->integer('price');
            $table->integer('size');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->date('year_built')->nullable();
            $table->string('property_type');
            $table->string('status');
            $table->string('modified_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
