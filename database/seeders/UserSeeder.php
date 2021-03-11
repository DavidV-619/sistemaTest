<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luis David Vazquez Ramos',
            'email' => 'davidrap619@hotmail.com',
            'password' => bcrypt('123456')

        ]);

        User::factory(20)->create();
    }
}
