@extends('layouts.master')


@section('content')

<h1>Add a member</h1>
<hr>

<form action="/member" method="post">
	{{csrf_field()}}
	<div class="form-group">
    <label for="Firstname">Name</label>
    <input type="text" class="form-control" placeholder="Enter member names here" name="name" required autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="pass" value={{$rand}}>
  </div>
  <div class="form-group">
    <label>Shares Amount (<i>Amount paid for 10 shares</i>)</label>
    <input type="text" class="form-control" name="amount" value="1500000">
  </div>
  <div class="form-group">
    <label>Time(When member first joined)</label>
    <input type="date" name="time" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Membership Type</label>
    <select name="type" class="form-control">
     <option>member</option> 
     <option>financial manager</option>
   </select>
 </div>
  <input type="hidden" name="password" value="1996">

 <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection('content')