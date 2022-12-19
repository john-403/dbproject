<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    use HasFactory;
    protected $table = 'staff';
    protected $fillable = [
        'fname', 'lname', 'position', 'phoneNumber', 'email', 'address', 'salary'
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
