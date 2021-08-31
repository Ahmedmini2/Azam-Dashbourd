<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@extends('layouts.master')
@section('menu')
@include('sidebar.report')
@endsection
@section('contant')


<div style="text-align:right;font-size">
       </div>
    <div style="text-align:;border-top:1px solid #000;">
    <br><br><br><br><br>
    <div style="text-align:center;font-size: 44px;color: #666;">TAX INVOICE</div>
    <div style="text-align:center;font-size: 15px;color: #666;">Tax Registration No: 100216412500003 </div>

</div>


<div class="card-body">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @foreach($query as $value)
<form  id="validateForm" method="POST" action="{{route('invoice/save')}}">
@csrf
    <p style="text-align:left;font-size:24px;color: #666;"><b>Invoice: # <input style=" background:none;border:0px" readonly   id="rand" name="rand" >  </input>  </b></p>




<script>



        var id = Math.random().toString(9).substr(5,6);

        $('#rand').attr('value', id);
        document.getElementById("rand").innerHTML = id;

    </script>

    <hr>
   <p style="font-size:15px;"> <b>Customer Name:  <input style="text-align:center;border:0px; background:none" readonly id="prop" name="prop" value="{{$value->prop}}" > </input> <span style="font-size:15px;padding-left:774px;margin-top:-20px" > Date:  <input style="text-align:center;border:0px; background:none" readonly id="date" name="date" > </input></span> </b> </p>
<script>
    n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").value = m + "/" + d + "/" + y;

</script>

   <br><br>  <p style="font-size:15px;"> <b>Customer Tax Registraation No: <span style="font-size:15px;padding-left:532px;" id="depar"> Dept: <input style="text-align:center;border:0px; background:none" readonly id="depar" name="depar" value="{{$value->depar}}" > </input> </span> </b> </p>
   <p style="font-size:15px;"> <b>Ref No: <span style="font-size:15px;padding-left:716px;"> Currency: AED</span> </b> </p>

   @endforeach

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
     <tr> <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input  id="idd" name="idd[]" style="text-align:center;border:0px;background:none;" readonly value="{{$value2->id}}"> </input> </td>

                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;">Schedule On <input  id="sdate" name="sdate[]" style="text-align:center;border:0px;background:none;" readonly value="{{$value2->date}}"> </input>  </td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input class="expensess qty" id="quan" name="quan[]" style="text-align:center;border:0px;background:none;" readonly value="{{$value2->quan}}"> </input> </td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input id="up" name="up[]" style="text-align:center;border:0px;background:none" class="expensess price" type="text" size="5"></input></td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input id="stot" name="stot[]" style="text-align:center;border:0px;background:none;" class="expensess_sum" readonly> </input></td>
                </tr>


                @endforeach

                <script>
                                  $('input.qty,input.price').on('change keyup',function(){
  var $tr = $(this).closest('tr'),
      $qty = $tr.find('input.qty')      ,
      $price= $tr.find('input.price'),

      $total= $tr.find('input.expensess_sum'),
      $grand_total=$('#tot'),
      $vat=$('#vat'),
      $gt2=$('#gt');

      $totalwithvat = $qty.val()*($price.val())+($qty.val()*($price.val()*(5/100)));
        $totalvat = $qty.val()*($price.val()*(5/100));

      $total.val($qty.val()*($price.val()));


      var grandTotal=0;
      var vaT=0;
      var gT2=0;


      $('table').find('input.expensess_sum').each(function(){
          if(!isNaN($(this).val()))
            {grandTotal += parseInt($(this).val());
               // vaT += parseFloat(vaT);
                gT2 +=parseFloat($totalwithvat);
            }
      });
      if(isNaN(grandTotal))
         grandTotal =0;
      $grand_total.val(grandTotal)
      $vat.val($grand_total.val()*(5/100))
      $gt2.val(parseFloat($grand_total.val())+parseFloat($vat.val()))
})

                            </script>



                <tr style = "font-weight: bold;">
    <td></td><td></td><td></td>
    <td style = "text-align:center;font-size:13px;">Total AMOUNT</td>
    <td style = "text-align:center;font-size:12px;"><input id="tot" name="tot" readonly style="text-align:center;border:0px;background:none;"> </input></td>
</tr>
<tr style = "font-weight: bold;">
    <td></td><td></td><td></td>
    <td style = "text-align:center;font-size:13px;">5% VAT AMOUNT</td>
    <td style = "text-align:center;font-size:12px;"><input id="vat" name="vat" readonly style="text-align:center;border:0px;background:none;"> </input></td>
</tr>
<tr style = "font-weight: bold;">
    <td></td><td></td><td></td>
    <td style = "text-align:center;font-size:13px;">GRAND TOTAL</td>
    <td style = "text-align:center;font-size:12px;"><input id="gt" name="gt" readonly style="text-align:center;border:0px;background:none;"> </input></td>
</tr>


</table></div>


<br><br><br><br><br><br>
<p style="font-size:20px;margin-left:50px;">Receiver Signature :   <span style="font-size:20px;margin-left:600px;margin-top:-30px"> For Conquest Events Management Services L.L.C </span> <br/>
<br/>
----------------------------   <span style="font-size:20px;margin-left:530px;margin-top:-30px">Signature: ----------------------</span> <br/>
<br/>
</p>

<button style="margin-left:50%" class="printPage" id="print">Print</button>
<button type="submit" style="margin-left:50%" id="print2" class="btn btn-primary" >Save</button>
</form>
<script>
    $('button.printPage').click(function(){
        var printButton = document.getElementById("print");
        var printButton2 = document.getElementById("print2");
        printButton.style.visibility = 'hidden';
        printButton2.style.visibility = 'hidden';
           window.print();

           printButton.style.visibility = 'visible';
           printButton2.style.visibility = 'visible';
           return false;
});
</script>
</body>
</html>

@endsection



