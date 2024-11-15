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
        Schema::create('seminars', function (Blueprint $table) {

            // required values
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('max_participants');
            $table->integer('current_participants');
            $table->date('held_date');

            // optional values
            $table->string('venue');
            $table->string('online_platform');
            $table->string('online_link');
            $table->string('ticket_price');

            

            $table->timestamps();

        });

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminars');
    }

    
};
