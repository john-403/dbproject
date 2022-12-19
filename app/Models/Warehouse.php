<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{

    use HasFactory;
    protected $table = 'warehouse';
    protected $fillable = [
        'size', 'floors', 'type'
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
