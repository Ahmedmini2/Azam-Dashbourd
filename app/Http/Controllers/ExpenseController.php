<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function report()
    {

    $query = DB::table('expenses')->select()->get();
    return view('showexpenses',compact('query'));

    }

    public function save(Request $Request)
    {

        $in = Carbon::now();
        $in->toDateTimeString();
        $data = [

            'date'          =>   $in,
            'description'   =>   $Request->des,
            'quantity'      =>   $Request->quan,
            'unit_price'    =>   $Request->uprice,
            'total'         =>   $Request->total,

        ];

        DB::table('expenses')->insert($data);
        return redirect()->back()->with('success','Has been update successfully!');
        // return dd($data);
    }

}
