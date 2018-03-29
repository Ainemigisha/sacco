@extends('layouts.master')

@section('content')

<div>
  <h1>{{$theMember->name}}</h1>
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h3>Email:
    {{$theMember->email}} 
  </h3>
  <hr>
  @if(isset(Auth::user()->id) && (Auth::user()->type =="financial manager"))
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a role="button" class="btn btn-sm btn-outline-secondary" href="/savings/{{$theMember->id}}/create">Add Saving
      </a>
      <a role="button" class="btn btn-sm btn-outline-secondary" href="/loans/{{$theMember->id}}/create">Add Loan
      </a>
      <a role="button" class="btn btn-sm btn-outline-secondary" href="/fines/{{$theMember->id}}/create">Add Fine
      </a>
      <a role="button" class="btn btn-sm btn-outline-secondary" href="/shares/{{$theMember->id}}/create">Add Shares
      </a>
    </div>
  </div>
  @endif
</div>

<!--<canvas class="my-4" id="myChart" width="900" height="380"></canvas>-->

<!--<div class="container">

</div>-->

<div class="table-responsive table-bordered table-striped">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>Month</th>
        <th>General Savings</th>
        <th>Welfare Contribution</th>
        <th>Loan</th>
        <th>Loan Interest</th>
        <th>General Fine</th>
        <th>Welfare Fine</th>
        <th>Shares</th>
        <th>Shares Amount</th>
      </tr>
    </thead>
    <tbody>
      @foreach($records as $record)
        <tr>
          <td>{{$record->date_created->format('F, Y')}}</td>
          <td>{{$record->general_savings}}</td>
          <td>{{$record->welfare_savings}}</td>
          <td>{{$record->loans_amount}}</td>
          <td>{{$record->loans_interest}}</td>
          <td>{{$record->general_fine}}</td>
          <td>{{$record->welfare_fine}}</td>
          <td>{{$record->number_of_shares}}</td>
          <td>{{$record->shares_amount_paid}}</td>
          @if(isset(Auth::user()->id) && (Auth::user()->type =="financial manager"))
          <td><a href="updateRecord/{{$record->id}}"><img src="/pics/edit1_20.png"></a>
            <a href=""><img src="/pics/cancel1_20.png"></a></td>
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection('content')