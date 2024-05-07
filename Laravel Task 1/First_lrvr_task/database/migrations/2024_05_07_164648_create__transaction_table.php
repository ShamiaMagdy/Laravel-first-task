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
        Schema::create('_transaction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('BookID');
            $table->unsignedBigInteger('BorrowerID');
            $table->date('Date');
            $table->string('Type');
            $table->foreign('BookID')->references('id')->on('_book');
            $table->foreign('BorrowerID')->references('id')->on('borrower');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_transaction');
    }
};
