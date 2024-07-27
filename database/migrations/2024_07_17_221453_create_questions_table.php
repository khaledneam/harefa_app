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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('challenge_id');
            $table->foreign('challenge_id')->references('id')->on('challenges');
            $table->unsignedBigInteger('dawry_id');
            $table->foreign('dawry_id')->references('id')->on('dawries');
            $table->unsignedBigInteger('hezma_id');
            $table->foreign('hezma_id')->references('id')->on('hezmas');
            $table->string('question')->nullable();
            $table->text('photo')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
