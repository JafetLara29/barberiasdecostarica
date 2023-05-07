<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * TODO: ROLES
         * ? 1. Barbershop
         * ? 2. Barber
         */

        $roles = [
            ['name' => 'barbershop'],
            ['name' => 'barber'],
        ];

        foreach($roles as $rol){
            Role::create($rol);
        }
    }
}
