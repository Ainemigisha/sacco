<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemberRecords;
use Carbon\Carbon;
use App\User;

class MonthlyRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {   
        $dtnow = Carbon::now();
        $dtnow->day(01)->hour(00)->minute(00)->second(00)->toDateTimeString();
        $records = MemberRecords::select('member_records.*','users.name')
        ->where('date_created',$dtnow)
        ->join('users', 'member_records.user_id', '=', 'users.id')
        ->orderBy('date_created', 'desc')
        ->get();
        return view('monthly.index', compact('records','dtnow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
         $record = MemberRecords::find($id);
         $member_name = User::where('id',$record->user_id)->pluck('name');

        return view('monthly.create',compact('record','member_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        MemberRecords::where('id',$id)
        ->update(
            ['general_savings'=>request('general_savings'),
            'welfare_savings'=>request('welfare_savings'),
            'loans_amount'=>request('loans_amount'),
            'loans_interest'=>request('loans_interest'),
            'number_of_shares'=>request('number_of_shares'),
            'shares_amount_paid'=>request('shares_amount_paid'),
            'general_fine'=>request('general_fine'),
            'welfare_fine'=>request('welfare_fine')
            ]);
        return redirect('/monthly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($year,$month)
    {
        $dtnow = Carbon::parse($year."-".$month);
        $records = MemberRecords::where('date_created',$dtnow)
        ->leftjoin('users', 'users.id', '=', 'member_records.user_id')
        ->orderBy('date_created', 'desc')
        ->get();
        return view('monthly.index', compact('records','dtnow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
