<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Score;
use App\Models\User;

class Date extends Model
{

    protected $table = 'dates';
    protected $fillable = [ 'date', 'coffee_id' ];

    public function users()
    {
    	return $this->belongsToMany(User::class, 'scores')->withPivot('score');
    }

	public function coffee()
	{
		return $this->belongsTo(Coffee::class);
	}

	public function scores()
	{
		return $this->hasMany(Score::class);
	}

	public function getScoreAttribute()
	{
		return round(Score::where('date_id', $this->id)->get()->avg('score'), 1);
	}

}
