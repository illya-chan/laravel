<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vote;
use App\Poll;
use App\User;
use DB;
use Auth;

class VoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function store(Request $request)
	{
		$request->user()->polls()->create([
        	'user_id' => $request->id,
    	]);
	}

	public function vote($id) {
		//check if user aleady voted
		$voted = DB::table('votes')
			->where('user_id', Auth::id())
			->where('poll_id', $id)
			->first();
		if(is_null($voted)) {
			//votes
			DB::table('votes')->insert(
				['poll_id' => $id, 'user_id' => Auth::id(), 'vote' => 1]
			);

			return view('polls.ty');
		}else {
			return view('polls.voted');
		}
	}
}
