<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\MemberRecords;
use Carbon\Carbon;

class LoansController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $theMember)
    {
        return view('loans.create',compact('theMember'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $theMember)
    {
        $dt = Carbon::parse(request('time'));
        $dt->day = 01;
        MemberRecords::updateOrCreate(
            ['date_created' => $dt, 'user_id' => $theMember->id],
            ['loans_amount' =>request('amount'),
            'loans_interest' =>request('interest'),
            'date_created' =>$dt,
            'user_id' =>$theMember->id
        ]);
        return redirect('member/'.$theMember->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
