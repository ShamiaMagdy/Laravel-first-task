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
        Schema::table('_book', function (Blueprint $table) {
            $table->foreign('AuthorID')->references('id')->on('_author');
            $table->foreign('PublisherID')->references('id')->on('publisher');
            $table->foreign('GenreID')->references('id')->on('genre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('book', function (Blueprint $table) {
            //
        });
    }
};
