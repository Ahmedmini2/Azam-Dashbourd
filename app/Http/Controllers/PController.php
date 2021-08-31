<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PController extends Controller
{
    public function report()
    {
   
    $query = DB::table('properties')->select()->get();
    return view('schedule',compact('query'));

    }
}
