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
        Schema::create('_book', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->unique();
            $table->unsignedBigInteger('AuthorID');
            $table->unsignedBigInteger('PublisherID');
            $table->unsignedBigInteger('GenreID');
            $table->string('ISBN');
            $table->integer('QuantityAvailable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_book');
    }
};
