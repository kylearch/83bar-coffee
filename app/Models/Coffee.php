<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Date;
use App\Models\Score;

class Coffee extends Model
{
    
    protected $table = 'coffee';
    protected $fillable = [ 'brand', 'name', 'roast', 'flavor' ];

	public function dates()
	{
		return $this->belongsToMany(Date::class);
	}

	public function scores()
	{
		return $this->hasManyThrough(Score::class, Date::class);
	}

    public function getScoreAttribute()
    {
		return count($this->scores) ? round($this->scores->avg('score'), 1) : "N/A" ;
    }

    public function getTitleAttribute()
    {
    	return "{$this->brand} - {$this->name}: {$this->score}";
    }

}
