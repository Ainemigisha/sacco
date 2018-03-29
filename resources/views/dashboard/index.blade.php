@extends('layouts.master')


@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	<h1 class="h1"> Monthly Records</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<a role="button" class="btn btn-sm btn-outline-secondary" href="/member/create">Export
			</a>
		</div>
	</div>
</div>

<div class="table-responsive table-bordered table-striped">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>Month</th>
				<th>Total Monthly savings</th>
				<th>Loans</th>
				<th>Loan Interest</th>
				<th>Penalties</th>
				<th>Welfare Contribution</th>
				<th>Annual Subscription</th>
				<th>Other Savings</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>March 2018</td>
				<td>30000000</td>
				<td>4000000</td>
				<td>12%</td>
				<td>0</td>
				<td>300000</td>
				<td>500000</td>
				<td>200000</td>
			</tr>
			<tr>
				<td>Feb 2018</td>
				<td>10000000</td>
				<td>7000000</td>
				<td>9%</td>
				<td>2</td>
				<td>600000</td>
				<td>500000</td>
				<td>150000</td>
			</tr>
			<tr>
				<td>Jan 2018</td>
				<td>3000000</td>
				<td>500000</td>
				<td>14%</td>
				<td>4</td>
				<td>350000</td>
				<td>450000</td>
				<td>40000</td>
			</tr>
			<tr>
				<td>Dec 2017</td>
				<td>5000000</td>
				<td>200000</td>
				<td>5%</td>
				<td>1</td>
				<td>600000</td>
				<td>500000</td>
				<td>100000</td>
			</tr>
			<tr>
				<td>Nov 2017</td>
				<td>12000000</td>
				<td>700000</td>
				<td>12%</td>
				<td>0</td>
				<td>300000</td>
				<td>500000</td>
				<td>200000</td>
			</tr>
			<tr>
				<td>Oct 2017</td>
				<td>8000000</td>
				<td>300000</td>
				<td>12%</td>
				<td>1</td>
				<td>300000</td>
				<td>500000</td>
				<td>200000</td>
			</tr>
			<tr>
				<td>August 2017</td>
				<td>15000000</td>
				<td>80000</td>
				<td>12%</td>
				<td>2</td>
				<td>300000</td>
				<td>500000</td>
				<td>200000</td>
			</tr>
			<tr>
				<td>July 2017</td>
				<td>10000000</td>
				<td>90000</td>
				<td>12%</td>
				<td>2</td>
				<td>300000</td>
				<td>500000</td>
				<td>200000</td>
			</tr>
			
		</tbody>
	</table>
</div>


@endsection('content')