<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class sNameController extends Controller
{
    
    public function report()
    {
   
    $query = DB::table('employees')->select()->get();
    $query2 = DB::table('properties')->select()->get();
    $query3 = DB::table('schedules')->select()->get();
    return view('schedule',compact('query','query2','query3'));

    }

    public function search()
    {
        $emp = $_GET['ename'];
        $from = $_GET['fromdate'];
        $to = $_GET['todate'];
        
        
        $query = DB::table('schedules')->select('sname')
            ->where('sname', 'LIKE','%' .$emp.'%')
            ->whereBetween('date',[$from,$to])
            ->count();

            $query5 = DB::table('employees')->select()
            ->where('name', 'LIKE','%' .$emp.'%')
            ->get();
    
            return view('StaffSalaryShow',compact('query5','query'));
        
    }

}
