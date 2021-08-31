<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\InvoiceDetails;

class ScheduleController extends Controller
{



    public function report()
    {

    $query = DB::table('schedules')->select()->get();
    return view('scheduledata',compact('query'));

    }

    public function report2()
    {

    $query = DB::table('schedules')->select('prop')->groupBy('prop')->get();
    $query2 = DB::table('invoices')->select('invoice_id')->get();
    return view('invoiceAdd',compact('query','query2'));

    }

    public function report3()
    {


    $query2 = DB::table('invoices')->select('invoice_id')->get();
    return view('invoicesearch',compact('query2'));

    }



    public function save(Request $Request)
    {


        $data = [

            'name'          =>   $Request->name,
            'date'          =>   $Request->date,
            'prop'          =>   $Request->prop,
            'depar'         =>   $Request->depar,
            'tin'           =>   $Request->tin,
            'tout'          =>   $Request->tout,
            'quan'          =>   $Request->s1,
            'sname'         =>   $Request->s2,
            'pick'          =>   $Request->pick,

        ];

        DB::table('schedules')->insert($data);
        return redirect()->back()->with('success','Has been update successfully!');
        // return dd($data);
    }

    public function search()
    {
        $fromDate = $_GET['ddy'];


        $query2 = DB::table('schedules')->select()
            ->where('date', 'LIKE','%' .$fromDate.'%')
            ->get();

            $result = DB::table('schedules')
            ->select('date')->groupBy(['date'])
            ->where('date', 'LIKE','%' .$fromDate.'%')
            ->get();


            $result2 = DB::table('schedules')
            ->select('prop')->where('date', 'LIKE','%' .$fromDate.'%')
            ->distinct()
            ->get();


            $propertye = DB::table('properties')->select('address')
            ->where('name', 'LIKE','%' .$result2[0]->prop. '%')
            ->get();

            // dd($propertye);
            $result3 = DB::table('schedules')
            ->select()
            ->get();



            $result4 = DB::table('properties')->select()->get();
            return view('schedulefinal',compact('query2','result','result2','result3','result4','propertye'));

    }


    public function search2()
    {
        $proper = $_GET['pn'];
        $dept = $_GET['dp'];


        $query = DB::table('schedules')->select('prop','depar')->groupBy('prop','depar')
            ->where('prop', 'LIKE','%' .$proper.'%')
            ->where('depar', 'LIKE','%' .$dept.'%')
            ->get();

            $query5 = DB::table('schedules')->select()
            ->where('prop', 'LIKE','%' .$proper.'%')
            ->where('depar', 'LIKE','%' .$dept.'%')
            ->get();

            return view('invoicelogo',compact('query5','query'));

    }


    public function search3()
    {
        $inv = $_GET['id'];



        $query = DB::table('invoices')->select()
            ->where('invoice_id', 'LIKE','%' .$inv.'%')
            ->get();





            $query5 = DB::table('invoice_details')->select()
            ->where('invoice_id', 'LIKE','%' .$inv.'%')
            ->get();

            return view('invoicelogoshow',compact('query5','query'))->with('qq',$query5);

    }


    // public function searchProp()
    // {
    //     $proper = $_GET['pn'];


    //     $query2 = DB::table('schedules')->select()
    //         ->where('prop', 'LIKE','%' .$proper.'%')
    //         ->get();

    // }


}
