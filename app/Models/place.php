<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'details',
        'pictures'
    ];


    public function city(){
        return $this-> belongsTo(city::class);
    }
}
