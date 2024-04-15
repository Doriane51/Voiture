<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = "locations";
    protected $fillable = [
        'id',
        'dateLocation',
        'dateFinLocation',
        'restorer',
        'user_id',
        'car_id'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class)->first();
    }

    public function user()
    {
        return $this->belongsTo(User::class)->first();
    }
}
