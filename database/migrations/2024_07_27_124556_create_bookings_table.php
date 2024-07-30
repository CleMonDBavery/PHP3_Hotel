<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->dateTime('booking_date');
            $table->dateTime('check_in_date');
            $table->dateTime('check_out_date');
            $table->double('total_price');
            $table->integer('status')->default(0);

            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('set null');

            $table->foreignId('room_id')
                ->nullable()
                ->constrained('rooms')
                ->onDelete('set null');

            $table->foreignId('service_id')
                ->nullable()
                ->constrained('services')
                ->onDelete('set null');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
