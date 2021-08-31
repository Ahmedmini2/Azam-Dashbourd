<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@extends('layouts.master')
@section('menu')
@include('sidebar.report')
@endsection
@section('contant')


    <div style="text-align:right;font-size">
       </div>

       <div style="text-align:;border-top:1px solid #000;background-image:url('assets/style_login/image/Ahmed.png');background-repeat: no-repeat;background-position:top;">
       <div style="text-align:left;margin-left:40px;">
       <h1> <b> Azam </b> </h1>
       <h2> <b> Facility Management LLC </b> </h2>
       <h3> Tel : +971 4 238 8862 , +971 4 269 5096</h3>
       <h3> Mobile : +971 508717917 </h3>
       <h3> P.O BOX 82482 DUBAI, U.A.E </h3>
       <h3> Email : accounts@azamgroup.ae <br>
        <span style="margin-left:40px"> operations@azamgroup.ae </span> </h3>
    </div>
       <br>
       <div style="text-align:center;font-size: 44px;color: #666;">TAX INVOICE</div>
    <div style="text-align:center;font-size: 20px;color: #666;">Tax Registration No: 100216412500003 </div>

</div>


<div class="card-body">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

@foreach($query as $value)

    <p style="text-align:left;font-size:24px;color: #666;"><b>Invoice: # <input style=" background:none;border:0px" readonly   id="rand" name="rand" value="{{$value->id}} - {{$value->invoice_id}}">  </input>  </b></p>




    <hr>
   <p style="font-size:15px;"> <b>Customer Name:  <input style="text-align:center;border:0px; background:none" readonly id="prop" name="prop" value="{{$value->prop}}" > </input> <span style="font-size:15px;padding-left:774px;margin-top:-20px" > Date:  <input style="text-align:center;border:0px; background:none" readonly id="date" name="date" value="{{$value->date}}" > </input></span> </b> </p>

   <br><br>  <p style="font-size:15px;"> <b>Customer Tax Registraation No: <span style="font-size:15px;padding-left:532px;" id="depar"> Dept: <input style="text-align:center;border:0px; background:none" readonly id="depar" name="depar" value="{{$value->depar}}" > </input> </span> </b> </p>
   <p style="font-size:15px;"> <b>Ref No: <span style="font-size:15px;padding-left:716px;"> Currency: AED</span> </b> </p>



    <br>
<b><div style="text-align:;border-top:1px solid #000;"> </div><br></b>
<div></div>
    <div style="border-bottom:1px solid #000;">
        <table style="width:95%;margin-left:30px;line-height: 2;">
            <tr style="border:1px solid #cccccc;background-color:#f2f2f2;">
                <th style="border:1px solid #cccccc;width:20px;font-size:15px;text-align:center">SR.NO</th>
                <th style="border:1px solid #cccccc;width:280px;font-size:15px;text-align:center">DESCRIPTION</th>
                <th style = "text-align:center;border:1px solid #cccccc;width:10px;font-size:15px;">QUANTITY</th>
                <th style = "text-align:center;border:1px solid #cccccc;width:100px;font-size:15px;">UNIT PRICE </th>
                <th style = "text-align:center;border:1px solid #cccccc;width:60px;font-size:15px;">AMOUNT</th>

            </tr>

   @foreach($query5 as $value2)
     <tr> <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"> {{$value2->idd}} </td>

                    <td style = "text-align:right; border:1px solid #cccccc;font-size:15px;"> Schedule On <input  id="sdate" name="sdate" style="text-align:center;border:0px;background:none;" readonly value="{{$value2->date}}"> </input>  </td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input class="expensess qty" id="quan" name="quan" style="text-align:center;border:0px;background:none;" readonly value="{{$value2->quan}}"> </input> </td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input id="up" name="up" style="text-align:center;border:0px;background:none" class="expensess price" readonly type="text" size="5" value="{{$value2->unit_price}}"></input></td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input id="stot" name="stot" style="text-align:center;border:0px;background:none;" class="expensess_sum" readonly value="{{$value2->stot}}"> </input></td>
                </tr>

                @endforeach







                <tr style = "font-weight: bold;">
    <td></td><td></td><td></td>
    <td style = "text-align:center;font-size:13px;">Total AMOUNT</td>
    <td style = "text-align:center;font-size:12px;"><input id="tot" name="tot" readonly style="text-align:center;border:0px;background:none;" value="{{$value->total}}"> </input></td>
</tr>
<tr style = "font-weight: bold;">
    <td></td><td></td><td></td>
    <td style = "text-align:center;font-size:13px;">5% VAT AMOUNT</td>
    <td style = "text-align:center;font-size:12px;"><input id="vat" name="vat" readonly style="text-align:center;border:0px;background:none;" value="{{$value->vat}}"> </input></td>
</tr>
<tr style = "font-weight: bold;">
    <td></td><td></td><td></td>
    <td style = "text-align:center;font-size:13px;">GRAND TOTAL</td>
    <td style = "text-align:center;font-size:12px;"><input id="gt" name="gt" readonly style="text-align:center;border:0px;background:none;" value="{{$value->grand_total}}"> </input></td>
</tr>


</table></div>


<br><br><br><br><br><br>
<p style="font-size:20px;margin-left:50px;">Receiver Signature :   <span style="font-size:20px;margin-left:600px;margin-top:-30px"> For Conquest Events Management Services L.L.C </span> <br/>
<br/>
----------------------------   <span style="font-size:20px;margin-left:530px;margin-top:-30px">Signature: ----------------------</span> <br/>
<br/>
</p>

<button style="margin-left:50%" class="printPage" id="print">Print</button>
@endforeach
</form>


<script>
    $('button.printPage').click(function(){
        var printButton = document.getElementById("print");

        printButton.style.visibility = 'hidden';

           window.print();

           printButton.style.visibility = 'visible';
           return false;
});
</script>
</body>
</html>

@endsection



