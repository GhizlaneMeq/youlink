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
        Schema::create('exchanges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requested_book_id')->constrained('books')->onDelete('cascade');
            $table->foreignId('received_book_id')->constrained('books')->onDelete('cascade');
            $table->unsignedBigInteger('requester_id');
            $table->unsignedBigInteger('receiver_id');
            $table->enum('status', ['requested', 'accepted', 'completed', 'cancelled'])->default('requested');
            $table->boolean('is_returned')->default(false);
            $table->timestamps();

            $table->foreign('requester_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exchanges');
    }
};
