<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{

	protected $fillable = array('poll_id', 'vote');

    protected $casts = [
        'user_id' => 'int',
    ];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}


