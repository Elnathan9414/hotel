<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            // Relations
            $table->foreignId('hotel_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('room_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('client_id')
                ->constrained()
                ->cascadeOnDelete();

            // Dates
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('nights');

            // Pricing
            $table->decimal('price_per_night', 10, 2);
            $table->decimal('total_amount', 10, 2);

            // Status
            $table->enum('status', [
                'pending',
                'confirmed',
                'checked_in',
                'checked_out',
                'cancelled'
            ])->default('pending');

            $table->text('notes')->nullable();

            $table->timestamps();

            // Indexes
            $table->index(['hotel_id', 'check_in', 'check_out']);
            $table->index(['room_id', 'check_in', 'check_out']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};