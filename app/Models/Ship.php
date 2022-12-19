<?php

namespace App\Models;

use App\Models\Container;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PhpParser\Node\Stmt\Do_;

class Ship extends Model
{

    use HasFactory;
    protected $table = 'ship';

    protected $fillable = [
        'country', 'owner', 'size', 'maxQuantity', 'productType'
    ];

    public function containers()
    {
        return $this->hasMany(Container::class);
    }

    public function docks()
    {
        return $this->belongsToMany(Dock::class);
    }
}
