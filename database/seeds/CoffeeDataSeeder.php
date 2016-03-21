<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

use App\Models\Coffee;
use App\Models\Date;
use App\Models\Score;
use App\Models\User;

class CoffeeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	Coffee::truncate();
    	Date::truncate();
    	Score::truncate();
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
     
        $progress = Coffee::create([ 'brand' => 'Progress', 'name' => 'Etheopian', 'roast' => 'medium' ]);
        $wheat = Coffee::create([ 'brand' => 'Wheatsville', 'name' => 'Sumatra', 'roast' => 'medium' ]);

        $date_1 = Date::create([ 'date' => '2016-03-15', 'coffee_id' => $progress->id ]);
        $date_2 = Date::create([ 'date' => '2016-03-17', 'coffee_id' => $wheat->id ]);

		$kyle = User::where('name', 'Kyle')->first();
		$alex = User::where('name', 'Alex')->first();
		$alexis = User::where('name', 'Alexis')->first();
		$betty = User::where('name', 'Betty')->first();
		$dana = User::where('name', 'Dana')->first();
		$paul = User::where('name', 'Paul')->first();
		$dan = User::where('name', 'Dan')->first();
		$bob = User::where('name', 'Bob')->first();

        Score::create([ 'user_id' => $alexis->id, 'date_id' => $date_1->id, 'score' => 7]);
        Score::create([ 'user_id' => $alex->id, 'date_id' => $date_1->id, 'score' => 8]);
        Score::create([ 'user_id' => $betty->id, 'date_id' => $date_1->id, 'score' => 8]);

        Score::create([ 'user_id' => $betty->id, 'date_id' => $date_2->id, 'score' => 7]);
        Score::create([ 'user_id' => $paul->id, 'date_id' => $date_2->id, 'score' => 8]);
    }
}
