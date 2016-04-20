@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

            <!-- Current Polls -->
            @if (count($polls) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Vote now
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped poll-table">
                            <thead>
                                <th>Poll</th>
								<th>Posted on</th>
								<th>Votes</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($polls as $poll)
                                    <tr>
                                        <td class="table-text"><div>{{ $poll->name }}</div></td>
										<td class="table-text"><div>{{ $poll->created_at }}</div></td>
										<td class="table-text"><div>{{ $votes }}</div></td>

                                        <!-- Poll Vote Button -->
                                        <td>
                                            <form action="/vote/{{ $poll->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('POST') }}

                                                <button type="submit" id="vote-poll-{{ $poll->id }}" class="btn btn-dange\">
                                                    <i class="fa fa-btn fa-check"></i>Vote Yes
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
