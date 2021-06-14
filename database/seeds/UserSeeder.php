<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'Admin',
            'email' => 'admin@app.com',
            'password' => Hash::make('passwordasdasd123'), //password
            'username' => 'admin'
        ]);

        User::create([
            'name' => 'St. Margaret',
            'email' => 'stmargaret@app.com',
            'password' => Hash::make('stmargaretwebsite'), //password
            'username' => 'stmargaret'
        ]);
    }
}
