<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'title', 'category', 'weight', 'size', 'manufacturer'
    ];

    public function container()
    {
        return $this->belongsTo(Container::class);
    }
}
