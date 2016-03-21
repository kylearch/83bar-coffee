<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
		User::truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

    	$users = [
    		['name' => 'Kyle', 'email' => 'kyle@go83bar.com', 'password' => Hash::make('237060')],
    		['name' => 'Alex', 'email' => 'alex@go83bar.com', 'password' => Hash::make('password')],
    		['name' => 'Alexis', 'email' => 'alexis@go83bar.com', 'password' => Hash::make('password')],
    		['name' => 'Betty', 'email' => 'betty@go83bar.com', 'password' => Hash::make('password')],
    		['name' => 'Dana', 'email' => 'dana@go83bar.com', 'password' => Hash::make('password')],
    		['name' => 'Paul', 'email' => 'paul@go83bar.com', 'password' => Hash::make('password')],
    		['name' => 'Dan', 'email' => 'dan@go83bar.com', 'password' => Hash::make('password')],
    		['name' => 'Bob', 'email' => 'bob@go83bar.com', 'password' => Hash::make('password')],
    	];

    	foreach ($users as $user)
    	{
			User::create([ 'name' => $user['name'], 'email' => $user['email'], 'password' => $user['password'] ]);
    	}
    }
}
