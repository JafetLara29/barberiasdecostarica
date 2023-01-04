<?php

namespace Database\Seeders;

use App\Models\Barbershop;
use Database\Factories\CitationFactory;
use App\Models\Citation;
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
        $barbershopSeeder=Barbershop::factory()->count(10)->create();
        $citationSeeder=Citation::factory()->count(50)->create();
        
    }
}
