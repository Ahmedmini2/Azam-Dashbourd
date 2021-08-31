<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function report2()
    {

    $query2 = DB::table('expenses')->select('total')->get()->sum('total');
    return view('dashboard',compact('query2'));

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = DB::table('users')
        ->select('users.role_id_user','role_name.role_id','role_name.promission')
        ->join('role_name','users.role_id_user','=','role_name.role_id')
        ->get();
        // dd($query);
         return view('dashboard',compact('role'));
    }

    public function userRole()
    {
        $role = DB::table('users')
            ->select('users.role_id_user','role_name.role_id','role_name.promission')
            ->join('role_name','users.role_id_user','=','role_name.role_id')
            ->get();
            // dd($query);
        return view('home',compact('role'));
    }

    // update_avatar
    public function update_avatar(Request $request)
    {

        // $request->validate([
        //     'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $user = Auth::user();

        $avatar =   $request->file('avatar');
        //  dd($avatar);
        // $avatarName = $user->id.'kh'.time().'.'.request()->avatar->getClientOriginalExtension();
        $avatarName = Str::slug(auth()->user()->avatar).'-'.auth()->id().'.'.$request->avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('/assets/img/' . $avatarName));

        $request->avatar->storeAs('avatar',$avatarName);
        $user->avatar = $avatarName;
        $user->save();

        return back()->with('success','Change picture successful.');
    }
}
