<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dock extends Model
{

    use HasFactory;
    protected $table = 'dock';

    protected $fillable = [
        'name', 'size', 'depth'
    ];

    public function ships()
    {
        return $this->belongsToMany(Ship::class);
    }
}
