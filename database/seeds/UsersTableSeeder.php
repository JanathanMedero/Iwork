<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('secret1'),
        ]);

        User::create([
            'name' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('secret2'),
        ]);

        User::create([
            'name' => 'Admin3',
            'email' => 'admin3@gmail.com',
            'password' => Hash::make('secret3'),
        ]);
    }
}
