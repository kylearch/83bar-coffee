<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Coffee;
use App\Models\Date;
use App\Models\User;

class Score extends Model
{
    protected $table = 'scores';
    protected $fillable = [ 'user_id', 'date_id', 'score' ];

    public function user()
    {
    	return $this->hasOne(User::class, 'id', 'user_id');
    }
}
