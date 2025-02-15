<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    protected $primaryKey = 'provider_id'; // Primary key
    protected $table = 'service_providers';

    protected $fillable = [
        'provider_name',
        'customer_id',
        'category_id',
        'sub_category_id',
        'email',
        'phone_number',
        'address',
        'location_id',
    ];
    public $timestamps = true; // Enable timestamps

    // Define relationships
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'sub_category_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'location_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'provider_id', 'provider_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
}