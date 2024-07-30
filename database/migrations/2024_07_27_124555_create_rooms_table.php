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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();


            $table->string('title');
            $table->text('description');
            $table->integer('room_number');
            $table->integer('is_public')->default(0);
            $table->integer('status')->default(0);


            $table->foreignId('image_id')
                ->nullable()
                ->constrained('images')
                ->onDelete('set null');

            $table->foreignId('room_type_id')
                ->nullable()
                ->constrained('roomtypes')
                ->onDelete('set null');


            $table->foreignId('service_id')
                ->nullable()
                ->constrained('services')
                ->onDelete('set null');

            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('set null');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
