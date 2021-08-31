<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SingleInvoiceController extends Controller
{
    public function report()
    {


    $query2 = DB::table('single_invoices')->select('prop')->groupBy('prop')->get();
    return view('invoiceCustomSearch',compact('query2'));

    }

    public function report2()
    {
        $inv = $_GET['id'];


        $query4 = DB::table('single_invoices')->select('prop')->groupBy('prop')
        ->where('prop', 'LIKE','%' .$inv.'%')->get();


        $query3 = DB::table('single_invoices')
        ->where('prop', 'LIKE','%' .$inv.'%')->get()->sum('total');

    $query = DB::table('single_invoices')->select()
    ->where('prop', 'LIKE','%' .$inv.'%')
    ->get();
    return view('invoiceCustomData',compact('query','query3','query4'));

    }

    public function report3()
    {

        $query9 = DB::table('single_invoices')->groupBy(['prop'])
        ->selectRaw('sum(total) as sum, prop')
        ->get();


        $query10 = DB::table('single_invoices')
        ->get()
        ->sum('total');


    return view('invoiceAllData',compact('query9','query10'));

    }


    public function save(Request $Request)
    {


        $data = [

            'invoice_id'          =>   $Request->inv1,
            'prop'          =>   $Request->prop1,
            'date'          =>   $Request->date1,
            'vat'           =>   $Request->vat1,
            'amount'           =>   $Request->amt1,
            'total'           =>   $Request->tot1,
            'status'          =>   false ,

        ];

        DB::table('single_invoices')->insert($data);

        return redirect()->back()->with('success','Has been update successfully!');
    }
}
