<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'info'
    ];



    public function places() {
        return $this->hasMany(place::class);
    }

    public function cars() {
        return $this->hasMany(car::class);
    }

    public function hotels() {
        return $this->belongsToMany(hotel::class , 'city_hotel');
    }

    public function airlines() {
        return $this->belongsToMany(airline::class , 'city_airline');
    }
}
