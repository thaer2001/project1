<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        ''
    ];


    public function cities(){
        return $this-> belongsToMany(city::class , 'city_hotel');
    }
}
