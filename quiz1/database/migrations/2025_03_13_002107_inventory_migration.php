<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Create the table
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();                   // Primary key (auto-increment)
            $table->string('name');         // Item name
            $table->integer('quantity');    // Quantity in stock
            $table->decimal('price', 8, 2); // Price per item
            $table->timestamps();           // Created at and updated at
        });
    }

    public function down(): void
    {
        // Drop the table
        Schema::dropIfExists('inventory');  // Drops the inventory table if it exists
    }
};
