<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';
    protected $primaryKey = 'location_id'; // Primary key
    protected $fillable = [
        'prov', 
        'kota', 
        'kec', 
        'kel', 
        'latitude', 
        'longitude'
    ];
    public $timestamps = true; // Enable timestamps

    // Define relationships
    public function customers()
    {
        return $this->hasMany(Customer::class, 'location_id', 'location_id');
    }

    public function serviceProviders()
    {
        return $this->hasMany(ServiceProvider::class, 'location_id', 'location_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'location_id', 'location_id');
    }
}