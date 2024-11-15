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
        Schema::create('workshops', function (Blueprint $table) {

            // required values
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('max_participants');
            $table->integer('current_participants');
            $table->date('held_date');

            // optional values
            $table->string('venue');
            $table->string('ticket_price');

            // foreign keys
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('event_categories');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('event_status');
            $table->unsignedBigInteger('speaker_id');
            $table->foreign('speaker_id')->references('id')->on('speakers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};
