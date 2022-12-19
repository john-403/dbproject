<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{

    use HasFactory;
    protected $table = 'truck';
    protected $fillable = [
        'brand', 'capacity', 'maxLoad', 'height'
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
