<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    use HasFactory;
    protected $table = 'team';
    protected $fillable = [
        'size', 'leader', 'task', 'equipment'
    ];

    public function staffs()
    {
        return $this->belongsToMany(Staff::class);
    }
}
