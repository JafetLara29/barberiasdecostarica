<?php

namespace Database\Seeders;

use App\Models\Barber;
use App\Models\Barbershop;
use App\Models\Citation;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userSeeder         = User::factory()->count(1)->create();
        $barbershopSeeder   = Barbershop::factory()->count(20)->create();
        $barberSeeder       = Barber::factory()->count(50)->create();
        $scheduleSeeder     = Schedule::factory()->count(100)->create();
        // $citationSeeder     =Citation::factory()->count(50)->create();
        $SocialMediaSeeder  = SocialMedia::factory()->count(50)->create();
        $ServiceSeeder      = Service::factory()->count(50)->create();
    }
}
