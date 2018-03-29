@extends('layouts.master')


@section('content')

<h1>Add savings for {{$theMember->name}}</h1>
<hr>

<form action="/savings/{{$theMember->id}}" method="post">
	{{csrf_field()}}
  <div class="form-group">
    <label>General Savings</label>
    <input type="text" class="form-control" name="general" value="0" required>
  </div>
  <div class="form-group">
    <label>Welfare Savings</label>
    <input type="text" class="form-control" name="welfare" value="0" required>
  </div>
  <div class="form-group">
    <label>Time</label>
    <input type="date" name="time" class="form-control" required>
  </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection('content')