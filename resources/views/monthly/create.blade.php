@extends('layouts.master')


@section('content')

<h1>Updating records for {{$member_name[0]}} in {{$record->date_created->format('F, Y')}}</h1>
<hr>

<form action="/updateRecord/{{$record->id}}" method="post">
	{{csrf_field()}}
  <div class="form-group">
    <label>General Savings</label>
    <input type="text" class="form-control" name="general_savings" value={{$record->general_savings}}>
  </div>
  <div class="form-group">
    <label>Welfare Savings</label>
    <input type="text" class="form-control" name="welfare_savings" value="{{$record->welfare_savings}}">
  </div>
  <div class="form-group">
    <label>Loans Amount</label>
    <input type="text" class="form-control" name="loans_amount" value="{{$record->loans_amount}}">
  </div>
  <div class="form-group">
    <label>Loans Interest</label>
    <input type="text" name="loans_interest" value="{{$record->loans_interest}}" class="form-control">
  </div> 
  <div class="form-group">
    <label>Number of new shares</label>
    <input type="number" class="form-control" name="number_of_shares" value="{{$record->number_of_shares}}">
  </div>
  <div class="form-group">
    <label>Deposit</label>
    <input type="text" class="form-control" name="shares_amount_paid" value="{{$record->shares_amount_paid}}">
  </div> 
  <div class="form-group">
    <label>General Fine</label>
    <input type="text" class="form-control" name="general_fine"  value="{{$record->general_fine}}">
  </div>
  <div class="form-group">
    <label>Welfare Fine</label>
    <input type="text" class="form-control" name="welfare_fine" value="{{$record->welfare_fine}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection('content')