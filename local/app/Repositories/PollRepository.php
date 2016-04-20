<?php

namespace App\Repositories;

use App\User;
use App\Poll;
use App\Vote;
use DB;

class PollRepository
{
	// Display user's polls
    public function forUser(User $user)
    {
        return Poll::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }

	public function getSingle(Poll $poll) {
		return Poll::where('id', $poll->id)
                    ->get();
	}

	// Display all polls
    public function forAll()
    {
        return DB::table('polls')->get();
    }
}
