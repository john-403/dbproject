<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    use HasFactory;
    protected $table = 'client';

    protected $fillable = [
        'fname', 'lname', 'phoneNumber', 'email', 'address', 'payment'
    ];

    public function trucks()
    {
        return $this->belongsToMany(Truck::class);
    }

    public function warehouses()
    {
        return $this->belongsToMany(Warehouse::class);
    }
}
