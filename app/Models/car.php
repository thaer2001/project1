<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        ''
    ];


    public function city(){
        return $this-> belongsTo(city::class);
    }
}
