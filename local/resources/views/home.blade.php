@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

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
				                        <th>&nbsp;</th>
				                    </thead>
				                    <tbody>
				                        @foreach ($polls as $poll)
				                            <tr>
				                                <td class="table-text"><div>{{ $poll->name }}</div></td>
				                            </tr>
				                        @endforeach
				                    </tbody>
				                </table>
				            </div>
				        </div>
				    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
