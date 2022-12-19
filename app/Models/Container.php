<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{

    use HasFactory;
    protected $table = 'container';

    protected $fillable = [
        'width', 'height', 'depth'
    ];

    public function ship()
    {
        return $this->belongsTo(Ship::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
