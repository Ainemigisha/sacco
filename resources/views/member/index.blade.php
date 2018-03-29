@extends('layouts.master')


@section('content')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h1"> Our Members</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a role="button" class="btn btn-sm btn-outline-primary" href="/member/create">Add New Member
			</a>
		</div>
	</div>
</div>


<table class="table table-bordered table-striped">
	<tr><th>Name</th><th>Email</th><th>Password</th><th>Type</th><th>Join Date</th><th>Created At</th></tr>
	@foreach($members as $member)
	<tr><td><a href="/member/{{$member->id}}">{{$member->name}}</a></td><td>{{$member->email}}</td><td>{{$member->real_password}}</td><td>{{$member->type}}</td>
		<td>{{$member->joinDate->format('F, Y')}}</td><td>{{$member->created_at->toFormattedDateString()}}</td></tr>
	@endforeach

</table>

@endsection('content')