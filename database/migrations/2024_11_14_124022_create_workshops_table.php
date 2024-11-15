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
            $table->string('venue')->nullable();
            $table->string('ticket_price')->nullable();

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
