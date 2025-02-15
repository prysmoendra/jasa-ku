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
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id('provider_id'); // Primary Key
            $table->string('provider_name', 255); // Provider name
            $table->foreignId('customer_id')->constrained('customers', 'customer_id')->onDelete('cascade'); // Foreign Key to Customer
            $table->foreignId('category_id')->nullable()->constrained('categories', 'category_id')->onDelete('cascade'); // Foreign Key to category
            $table->foreignId('sub_category_id')->nullable()->constrained('sub_categories', 'sub_category_id')->onDelete('cascade'); // Foreign Key to sub_categories
            $table->string('email', 255)->unique(); // Unique email
            $table->string('phone_number', 15); // Phone number
            $table->text('address'); // Address
            $table->foreignId('location_id')->nullable()->constrained('locations', 'location_id')->onDelete('set null'); // Foreign Key to location
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_provider');
    }
};
