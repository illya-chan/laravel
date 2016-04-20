@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Poll
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Poll Form -->
                    <form action="/poll" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Poll Name -->
                        <div class="form-group">
                            <label for="poll-name" class="col-sm-3 control-label">Poll</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="poll-name" class="form-control" value="{{ old('poll') }}">
                            </div>
                        </div>

                        <!-- Add Poll Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Poll
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Polls -->
            @if (count($polls) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Polls
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped poll-table">
                            <thead>
                                <th>Poll</th>
								<th>Posted on</th>
								<th>Posted by</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($polls as $poll)
                                    <tr>
                                        <td class="table-text"><div><a href="/poll/{{ $poll->id }}">{{ $poll->name }}</a></div></td>
										<td class="table-text"><div>{{ $poll->created_at }}</div></td>
										<td class="table-text"><div>{{ $poll->posted_by }}</div></td>

                                        <!-- Poll Delete Button -->
                                        <td>
                                            <form action="/del/{{ $poll->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-poll-{{ $poll->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
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
