<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'transaction_id'; // Primary key
    public $timestamps = true; // Enable timestamps

    // Define relationships
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class, 'provider_id', 'provider_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'location_id');
    }

    public function detailTransactions()
    {
        return $this->hasMany(DetailTransaction::class, 'transaction_id', 'transaction_id');
    }
}