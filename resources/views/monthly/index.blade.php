@extends('layouts.master')


@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h1">{{$dtnow->format('F, Y')}}</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<!--<div class="btn-group mr-2">
			<a role="button" class="btn btn-sm btn-outline-secondary" href="/member/create">Export
			</a>
		</div>-->
		<div class="dropdown">
		  <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    {{$dtnow->format('F')}}
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		  	<?php 
		  	$months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
		  		for ($i=0; $i <12 ; $i++) { 
		  			?>
		  			<a class="dropdown-item" href=/monthly/2018/{{$i+1}}>{{$months[$i]}}</a>
		  			<?php 
		  		}
		  	 ?>
		  </div>
		</div>
	</div>
</div>

<div class="table-responsive table-bordered table-striped">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>Member</th>
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
				<td>{{$record->name}}</td>
				<td>{{$record->general_savings}}</td>
				<td>{{$record->welfare_savings}}</td>
				<td>{{$record->loans_amount}}</td>
				<td>{{$record->loans_interest}}</td>
				<td>{{$record->general_fine}}</td>
				<td>{{$record->welfare_fine}}</td>
				<td>{{$record->number_of_shares}}</td>
				<td>{{$record->shares_amount_paid}}</td>
				@if(isset(Auth::user()->id) && (Auth::user()->type =="financial manager"))
				<td><a href="updateRecord/{{$record->id}}"><img src="/pics/edit1_20.png"></a><img src="/pics/cancel1_20.png"></td>
				@endif
			</tr>
			@endforeach
			
		</tbody>
	</table>
</div>


@endsection('content')