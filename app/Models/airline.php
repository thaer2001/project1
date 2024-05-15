<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airline extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'time',
        'class',
        'passengers'
    ];


    public function cities () {
        $this->belongsToMany(city::class, 'city_ariline');
    }
}
