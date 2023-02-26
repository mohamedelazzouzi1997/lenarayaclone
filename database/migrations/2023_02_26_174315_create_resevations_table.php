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
        Schema::create('resevations', function (Blueprint $table) {
            $table->id();
            $table->string('full name');
            $table->string('email');
            $table->string('phone');
            $table->string('date');
            $table->string('time');
            $table->string('number_of_persons');
            $table->string('message');
            $table->string('origin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resevations');
    }
};