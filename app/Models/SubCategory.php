<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'sub_category_id'; // Primary key
    public $timestamps = true; // Enable timestamps

    // Define relationships
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function serviceProviders()
    {
        return $this->hasMany(ServiceProvider::class, 'sub_category_id', 'sub_category_id');
    }

    public function detailTransactions()
    {
        return $this->hasMany(DetailTransaction::class, 'sub_category_id', 'sub_category_id');
    }
}