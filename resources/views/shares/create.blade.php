@extends('layouts.master')


@section('content')

<h1>Add Shares for {{$theMember->name}}</h1>
<hr>

<form action="/shares/{{$theMember->id}}" method="post">
	{{csrf_field()}}
  <div class="form-group">
    <label>Number of new shares</label>
    <input type="number" class="form-control" name="num" placeholder="1" required autofocus>
  </div>
  <div class="form-group">
    <label>Deposit</label>
    <input type="text" class="form-control" name="amount" placeholder="150000" required>
  </div> 
  <div class="form-group">
    <label>Time</label>
    <input type="date" name="time" class="form-control" required>
  </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection('content')