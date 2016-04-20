<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
	protected $fillable = array('name', 'posted_by');

    protected $casts = [
        'user_id' => 'int',
    ];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

}


