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
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->id('detail_id'); // Primary Key
            $table->foreignId('transaction_id')->nullable()->constrained('transactions', 'transaction_id')->onDelete('cascade'); // Foreign Key to transaction
            $table->foreignId('sub_category_id')->nullable()->constrained('sub_categories', 'sub_category_id')->onDelete('cascade'); // Foreign Key to sub_categories
            $table->integer('quantity')->default(1); // Quantity (defaults to 1)
            $table->decimal('price', 10, 2); // Price of the sub-category at the time of the transaction
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_transaction');
    }
};
