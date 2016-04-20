<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Poll;
use App\Vote;
use App\Repositories\PollRepository;
use DB;

class PollController extends Controller
{

	protected $polls;

    public function __construct(PollRepository $polls)
    {
        $this->middleware('auth');
		$this->polls = $polls;
    }

	public function getAll(Request $request)
	{
		return view('polls.index', [
            'polls' => $this->polls->forAll(),
        ]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
		    'name' => 'required|max:255',
		]);

		//create poll
		$request->user()->polls()->create([
			'user_id' => $request->id,
        	'name' => $request->name,
			'posted_by' => $request->user()->name,
    	]);

		$id = DB::getPdo()->lastInsertId();

		//create vote entry
		$request->user()->votes()->create([
			'user_id' => $request->id,
        	'poll_id' => $id,
			'vote' => 0,
    	]);


    	return redirect('/polls');

	}

	//get a single poll to display
	public function getPoll(Request $request, Poll $poll) {

		$vote = Vote::where('poll_id', $poll->id)
                    ->get();

		$count = count($vote);

		return view('polls.single', [
            'polls' => $this->polls->getSingle($poll),
			'votes' => $count,
        ]);
	}

    public function destroy(Request $request, Poll $poll)
    {
        $this->authorize('destroy', $poll);
        $poll->delete();
        return redirect('/polls');
    }
}
