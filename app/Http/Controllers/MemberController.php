<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\User;
Use App\MemberRecords;
Use DB;
Use App\Http\Requests\EditRequest;
Use Auth;
use Carbon\Carbon;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $private;

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
        if (Auth::user()->type=="financial manager") {
            $members = User::latest()->get();
            return view('member.index',compact('members'));
        }else{
            return redirect()->home();
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rand =  $this->generateRandomString(5);
        if (Auth::user()->type=="financial manager") {
            return view('member.create',compact('rand'));
        }else{
            return redirect()->home();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $dt = Carbon::parse(request('time'));
        $dt->day = 01;
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('pass')),
            'real_password' => request('pass'),
            'joinDate' => $dt,
            'type' => request('type')
        ]);
        $userId = User::select('id')->where('email', request('email'))->get()[0];
        MemberRecords::updateOrCreate(
            ['date_created' => $dt, 'user_id' => $userId],
            [
                'number_of_shares' =>10,
                'shares_amount_paid' =>request('amount'),
                'date_created' =>$dt,
                'user_id' => $userId->id
            ]);
        return redirect('/members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $theMember)
    {
        if (Auth::user()->type=="financial manager" || $theMember->id == Auth::user()->id) {
            $records = MemberRecords::where('user_id',$theMember->id)
            ->orderBy('date_created', 'desc')
            ->get();
            return view('member.show',compact('records','theMember'));
        }else{
            return redirect()->home();
        }
        
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

     public function generateRandomString($length = 5) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    
}
