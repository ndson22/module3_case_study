<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\District;
use App\Models\Commune;
use App\Models\Food;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurants';

    protected $fillable = ['name', 'address', 'commune_id', 'district_id', 'city_id', 'open_time', 'close_time'];

    public function foods ()
    {
        return $this->hasMany(Food::class, 'restaurant_id');
    }

    public function city ()
    {
        return $this->belongsTo(City::class);
    }

    public function district ()
    {
        return $this->belongsTo(District::class);
    }

    public function commune ()
    {
        return $this->belongsTo(Commune::class);
    }
}
