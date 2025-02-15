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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id('sub_category_id'); // Primary Key
            $table->string('sub_category_name', 255); // Sub-category name
            $table->decimal('price', 10, 2); // Price of the sub-category
            $table->foreignId('category_id')->nullable()->constrained('categories', 'category_id')->onDelete('cascade'); // Foreign Key to category
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
};
