<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Carbon\Carbon;

use App\Models\Coffee;
use App\Models\Date;
use App\Models\Score;
use App\Models\User;

class CoffeeController extends Controller
{
    
	public function index(Request $request)
	{
		$coffees = Coffee::all()->sortByDesc('score');
		return view('pages.index', compact('coffees'));	
	}

    public function calendar(Request $request)
    {
    	return view('pages.calendar');
    }

    public function dates(Request $request)
    {
    	$start = Carbon::createFromTimestamp($request->input('start'))->toDateString();
    	$end = Carbon::createFromTimestamp($request->input('end'))->toDateString();
		$dates = Date::where('date', '>=', $start)->where('date', '<=', $end)->get();
		$response = [];
		foreach ($dates as $date)
		{
			$response[] = ['title' => $date->coffee->title, 'start' => $date->date];
		}
		return response()->json($response);
    }

    public function getRate(Request $request)
    {
		$users = User::all();
		$date = Date::where('date', date('Y-m-d'))->first();
		if ( ! $date)
		{
			$request->session()->flash('error', 'No coffee set for today');
			return redirect()->route('index');
		}
		return view('pages.coffee.rate', compact('users', 'date'));
    }

    public function postRate(Request $request)
    {
    	$score = Score::firstOrCreate([ 'user_id' => $request->input('user_id'), 'date_id' => $request->input('date_id') ]);
    	$score->score = $request->input('score');
    	$score->save();
    	$request->session()->flash('message', 'Score saved successfully!');
    	return redirect()->route('index');
    }

    public function add(Request $request)
    {
    	$coffee = new Coffee();
		return view('pages.coffee.form', compact('coffee'));
    }

    public function store(Request $request)
    {
		$coffee = Coffee::create($request->input());
		if ( ! empty($request->input('date')))
		{
			$date = Carbon::parse($request->input('date'));
			if ($date) Date::create([ 'date' => $date->toDateString(), 'coffee_id' => $coffee->id ]);
		}
		return redirect()->route('index');
    }

    public function edit(Request $request, $coffee_id)
    {
    	$coffee = Coffee::find($coffee_id);
		return view('pages.coffee.form', compact('coffee'));
    }

    public function update(Request $request, $coffee_id)
    {
		$coffee = Coffee::find($coffee_id);
		$coffee->update($request->input());
		if ( ! empty($request->input('date')))
		{
			$date = Carbon::parse($request->input('date'));
			if ($date) Date::create([ 'date' => $date->toDateString(), 'coffee_id' => $coffee->id ]);
		}
		return redirect()->route('index');
    }

}
