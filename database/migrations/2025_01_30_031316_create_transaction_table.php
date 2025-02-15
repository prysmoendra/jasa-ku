<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id'); // Primary Key
            $table->foreignId('customer_id')->nullable()->constrained('customers', 'customer_id')->onDelete('cascade'); // Foreign Key to customer
            $table->foreignId('provider_id')->nullable()->constrained('service_providers', 'provider_id')->onDelete('cascade'); // Foreign Key to service_provider
            $table->foreignId('location_id')->nullable()->constrained('locations', 'location_id')->onDelete('set null'); // Foreign Key to location
            $table->dateTime('transaction_date')->useCurrent(); // Transaction date (defaults to current time)
            $table->decimal('total_amount', 10, 2); // Total amount
            $table->enum('status', ['pending', 'completed', 'cancelled'])->default('pending'); // Transaction status
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction');
    }
};
