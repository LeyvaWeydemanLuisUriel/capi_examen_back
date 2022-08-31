<?php

namespace Database\Seeders;

use App\Models\UserDomicilio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersDomicilioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserDomicilio::factory()->count(100)->create();

    }
}
