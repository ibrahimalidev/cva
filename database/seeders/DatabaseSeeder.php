<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\DriverLicenseStatus;
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
        \App\Models\User::factory(10)->create();
        \App\Models\MartialStatus::factory(2)->create();
        \App\Models\GenderStatus::factory(2)->create();
//        \App\Models\City::factory(10)->create();
        DriverLicenseStatus::factory(2)->create();
        \App\Models\MilitaryStatus::factory(2)->create();
    }
}
