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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id'); // Primary Key
            $table->string('customer_name', 255); // Customer name
            $table->date('datebirth')->nullable(); // Date of birth field
            $table->string('email', 255)->unique(); // Unique email
            $table->string('phone_number', 15)->unique(); // Phone number
            $table->text('address')->nullable(); // Address
            $table->string('password'); // Password field
            $table->foreignId('location_id')->nullable()->constrained('locations', 'location_id')->onDelete('set null'); // Foreign Key to location
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer');
    }
};
