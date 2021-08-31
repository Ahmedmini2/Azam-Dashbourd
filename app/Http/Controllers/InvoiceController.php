<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\InvoiceDetails;

class InvoiceController extends Controller
{
    public function report()
    {

    $query = DB::table('invoices')->select()->get();
    return view('invoiceData',compact('query'));

    }

    public function save(Request $Request)
    {


        $data = [

            'invoice_id'          =>   $Request->rand,
            'date'          =>   $Request->date,
            'prop'          =>   $Request->prop,
            'depar'         =>   $Request->depar,
            'total'           =>   $Request->tot,
            'vat'           =>   $Request->vat,
            'grand_total'           =>   $Request->gt,
            'status'          =>   false ,

        ];


        $invdata = new InvoiceDetails();

        $invdata->idd = request('idd');
        $invdata->invoice_id = request('rand');
        $invdata->date = request('sdate');
        $invdata->prop = request('prop');
        $invdata->depar = request('depar');
        $invdata->quan = request('quan');
        $invdata->unit_price = request('up');
        $invdata->stot = request('stot');

        for($i = 0 ; $i<count($invdata->idd) ; $i++ )
{
    $var1 = $invdata->idd[$i];
    $var2 = $invdata->invoice_id;
    $var3 = $invdata->date[$i];
    $var4 = $invdata->prop;
    $var5 = $invdata->depar;
    $var6 = $invdata->quan[$i];
    $var7 = $invdata->unit_price[$i];
    $var8 = $invdata->stot[$i];

    $data2 = [

        'idd'          =>   $var1,
        'invoice_id'          =>   $var2,
        'date'          =>   $var3,
        'prop'          =>   $var4,
        'depar'         =>   $var5,
        'quan'           =>   $var6,
        'unit_price'           =>   $var7,
        'stot'           =>   $var8,

    ];

    DB::table('invoice_details')->insert($data2);

}


        DB::table('invoices')->insert($data);

        return redirect()->back()->with('success','Has been update successfully!');

    }
}
