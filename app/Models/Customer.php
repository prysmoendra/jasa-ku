<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $table = 'customers';
    protected $primaryKey = 'customer_id'; // Primary key
    protected $fillable = [
        'customer_name',
        'datebirth',
        'email',
        'phone_number',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $guarded = ['customer'];

    public $timestamps = true; // Enable timestamps

    // Define relationships
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'location_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'customer_id', 'customer_id');
    }

    public function serviceProvider()
    {
        return $this->hasOne(ServiceProvider::class, 'customer_id', 'customer_id');
    }
}