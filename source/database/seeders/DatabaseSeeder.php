<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Customer::factory(10)->create();
        // $this->call(CitySeeder::class);
        \App\Models\District::factory(5)->create();
        \App\Models\Commune::factory(5)->create();
        // $this->call(CategorySeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}
