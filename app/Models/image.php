<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    //Relacion pilimorfica
    public function imageable(){
        return $this->morphTo();
    }
}
