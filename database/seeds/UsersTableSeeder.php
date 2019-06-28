<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Kevin',
            'email' => 'kevin@app.dev',
            'password' => Hash::make('welkom01'),
        ]);
        \App\User::create([
            'name' => 'Ruben',
            'email' => 'ruben@app.dev',
            'password' => Hash::make('welkom01'),
        ]);
        \App\User::create([
            'name' => 'Bjorn',
            'email' => 'bjorn@app.dev',
            'password' => Hash::make('welkom01'),
        ]);
    }
}
