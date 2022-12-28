<?php

namespace Database\Seeders;
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
        $citationSeeder=Citation::factory()->count(50)->create();  //seederCitations
    }
}
