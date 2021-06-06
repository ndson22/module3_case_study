<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';

    public function restaurant ()
    {
        return $this->hasMany(Restaurant::class);
    }
}
