@extends('layouts.master')


@section('content')

<h1>Add Fine for {{$theMember->name}}</h1>
<hr>

<form action="/fines/{{$theMember->id}}" method="post">
	{{csrf_field()}}
  <div class="form-group">
    <label>General Fine</label>
    <input type="text" class="form-control" name="general"  value="0" required>
  </div>
  <div class="form-group">
    <label>Welfare Fine</label>
    <input type="text" class="form-control" name="welfare" value="0" required>
  </div>
  <div class="form-group">
    <label>Time</label>
    <input type="date" name="time" class="form-control" required>
  </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection('content')