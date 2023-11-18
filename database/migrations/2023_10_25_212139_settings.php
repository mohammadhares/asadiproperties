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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('about');
            $table->text('privacy');
            $table->text('condations');
            $table->string('phone_number');
            $table->string('whatsapp_number');
            $table->string('primary_email');
            $table->string('secondary_email');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('youtube');
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('modified_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
