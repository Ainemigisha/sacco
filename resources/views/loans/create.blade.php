@extends('layouts.master')


@section('content')

<h1>Add Loan for {{$theMember->name}}</h1>
<hr>

<form action="/loans/{{$theMember->id}}" method="post">
	{{csrf_field()}}
  <div class="form-group">
    <label>Loans Amount</label>
    <input type="text" class="form-control" name="amount" placeholder="100000" required autofocus>
  </div>
	<div class="form-group">
    <label>Loans Interest</label>
    <select name="interest" class="form-control">
     <option value="3">3%</option> 
     <option value="5">5%</option>
   </select>
 </div> 
  <div class="form-group">
    <label>Time</label>
    <input type="date" name="time" class="form-control" required>
  </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection('content')