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
        Schema::create('roomtypes', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');
            $table->integer('is_public')->default(0);
            $table->double('price_per_night');
            $table->integer('room_quanlity');

            $table->foreignId('image_id')
                ->nullable()
                ->constrained('images')
                ->onDelete('set null');

            $table->foreignId('comment_id')
                ->nullable()
                ->constrained('comments')
                ->onDelete('set null');

            $table->foreignId('convenient_id')
                ->nullable()
                ->constrained('convenients')
                ->onDelete('set null');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomtypes');
    }
};
