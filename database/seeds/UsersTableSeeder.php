<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Favour Ori',
            'email' => 'favour@yahoo.com',
            'secret_code' => '72hUHd3r',
            'password' => Hash::make('72hUHd3r'),
        ]);
    }
}
