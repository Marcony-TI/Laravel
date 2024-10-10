<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public function sala()
    {
        return $this->hasMany(sala::class);
    }

    public function endereco()
    {
        return $this->hasMany(endereco::class);
    }
    use HasFactory;

}
