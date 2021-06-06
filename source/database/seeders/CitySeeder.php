<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->city_name = 'An Giang';
        $city->save();

        $city = new City();
        $city->city_name = 'Hà Nam';
        $city->save();

        $city = new City();
        $city->city_name = 'Hà Tĩnh';
        $city->save();

        $city = new City();
        $city->city_name = 'Hải Dương';
        $city->save();

        $city = new City();
        $city->city_name = 'Hậu Giang';
        $city->save();

        $city = new City();
        $city->city_name = 'Hòa Bình';
        $city->save();

        $city = new City();
        $city->city_name = 'Hà Nội';
        $city->save();

        $city = new City();
        $city->city_name = 'TP HCM';
        $city->save();

        $city = new City();
        $city->city_name = 'Hải Phòng';
        $city->save();

        $city = new City();
        $city->city_name = 'Đà Nẵng';
        $city->save();
    }
}
