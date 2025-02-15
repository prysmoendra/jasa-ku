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
        Schema::create('locations', function (Blueprint $table) {
            $table->id('location_id'); // Primary Key
            $table->string('prov', 255); // Unique province name
            $table->string('kota', 255); // City name
            $table->string('kec', 255); // Subdistrict name
            $table->string('kel', 255); // Village name
            $table->decimal('latitude', 10, 7)->nullable(); // Latitude field
            $table->decimal('longitude', 10, 7)->nullable(); // Longitude field
            // $table->unique(['prov', 'kota']); // Unique constraint for province and city
            $table->timestamps(); // created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('location');
    }
};
