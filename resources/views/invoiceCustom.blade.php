<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@extends('layouts.master')
@section('menu')
@include('sidebar.report')
@endsection
@section('contant')

<div class="row" style="margin:15px;margin-bottom: -100px" >
    <img src="assets/style_login/image/top.png" width="100%">
</div>
<div class="card-body">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

<form  id="validateForm" method="POST" action="{{route('invoiceCustom/save')}}">
@csrf
<div class="row">

  <div class="col-6">
    <p style="text-align:left;font-size:24px;color: #666;color:Black"><b>Invoice: # <input style=" background:none;border:0px" readonly   id="inv1" name="inv1" size="7">  </input>  </b></p>
  </div>

  <div class="col-5">
    <p style="font-size:24px;color:Black" > <b> Date:</b> <input style="font-size:20px;text-align:center;border:0px; background:none"  id="date1" name="date1" > </input> </p>
  </div>
</div>



<script>



        var id = Math.random().toString(9).substr(5,6);

        $('#inv1').attr('value', id);
        document.getElementById("inv1").innerHTML = id;

    </script>

    <hr>

   <p style="font-size:25px;color:Black"> <b>Customer Name:
       <input style="font-size:22px;text-align:center;border:0px; background:none"  id="prop1" name="prop1" value="" size="30" >
     </input> </b> </p>
<script>
    n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date1").value = d + "/" + m + "/" + y;

</script>

<div class="row">
    <div class="col-6">
        <p style="font-size:18px;color:Black"> <b>Customer TRN:
            <input style="font-size:20px;text-align:center;border:0px;background:none"  id="depar" name="depar" type="text" > </input> </b> </p>
    </div>
    <div class="col-6">
        <p style="font-size:18px;color:Black"> <b>Dept:
            <input style="font-size:25px;text-align:center;border:0px; background:none" type="text" id="depar" name="depar" value="" size="20"> </input>  </b> </p>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <p style="font-size:18px;color:Black"> <b>Ref No:
            <input style="font-size:20px;text-align:center;border:0px; background:none"  id="depar" name="depar" value="" > </input></b> </p>
    </div>
    <div class="col-6">
        <p style="font-size:18px;color:Black"> <b> Currency: AED
           </b> </p>
    </div>
</div>





    <br>
<b><div style="text-align:;border-top:1px solid #000;"> </div><br></b>
<div></div>
    <div style="border-bottom:1px solid #000;">
        <table style="width:95%;margin-left:30px;line-height: 2;">
            <tr style="border:1px solid #cccccc;background-color:#f2f2f2;">
                <th style="border:1px solid #cccccc;width:20px;font-size:15px;text-align:center;color:darkcyan">SR.NO</th>
                <th style="border:1px solid #cccccc;width:120px;font-size:15px;text-align:center;color:darkcyan">DESCRIPTION</th>
                <th style = "text-align:center;border:1px solid #cccccc;width:10px;font-size:15px;color:darkcyan">QUANTITY</th>
                <th style = "text-align:center;border:1px solid #cccccc;width:600px;font-size:15px;color:darkcyan">UNIT PRICE </th>
                <th style = "text-align:center;border:1px solid #cccccc;width:10px;font-size:15px;color:darkcyan">AMOUNT</th>

            </tr>


     <tr> <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"> <input style="text-align:center;border:0px; background:none"  id="idd" name="idd[]" value="" size="4"> </input> </td>

                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"> <input  id="sdate" name="sdate[]" style="text-align:center;border:0px;background:none;"  value="" size="30"> </input>  </td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input class="expensess qty" id="quan[]" name="quan" style="text-align:center;border:0px;background:none;"  value=""> </input> </td>
                    <td style = "text-align:center; border:1px solid #cccccc;width:300px;font-size:15px;"><input id="up" name="up[]" style="text-align:center;border:0px;background:none" class="expensess price" type="text" size="5"></input></td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input id="stot" name="stot[]" style="text-align:center;border:0px;background:none;" class="expensess_sum" readonly> </input></td>
                </tr>
                <tr> <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"> <input style="text-align:center;border:0px; background:none"  id="idd" name="idd[]" value="" size="4"> </input> </td>

                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"> <input  id="sdate" name="sdate[]" style="text-align:center;border:0px;background:none;"  value="" size="30"> </input>  </td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input class="expensess qty" id="quan" name="quan[]" style="text-align:center;border:0px;background:none;"  value=""> </input> </td>
                    <td style = "text-align:center; border:1px solid #cccccc;width:300px;font-size:15px;"><input id="up" name="up[]" style="text-align:center;border:0px;background:none" class="expensess price" type="text" size="5"></input></td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input id="stot" name="stot[]" style="text-align:center;border:0px;background:none;" class="expensess_sum" readonly> </input></td>
                </tr>
                <tr> <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"> <input style="text-align:center;border:0px; background:none"  id="idd" name="idd[]" value="" size="4"> </input> </td>

                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"> <input  id="sdate" name="sdate[]" style="text-align:center;border:0px;background:none;"  value="" size="30"> </input>  </td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input class="expensess qty" id="quan" name="quan[]" style="text-align:center;border:0px;background:none;"  value=""> </input> </td>
                    <td style = "text-align:center; border:1px solid #cccccc;width:300px;font-size:15px;"><input id="up" name="up[]" style="text-align:center;border:0px;background:none" class="expensess price" type="text" size="5"></input></td>
                    <td style = "text-align:center; border:1px solid #cccccc;font-size:15px;"><input id="stot" name="stot[]" style="text-align:center;border:0px;background:none;" class="expensess_sum" readonly> </input></td>
                </tr>





                <script>
                                  $('input.qty,input.price').on('change keyup',function(){
  var $tr = $(this).closest('tr'),
      $qty = $tr.find('input.qty')      ,
      $price= $tr.find('input.price'),

      $total= $tr.find('input.expensess_sum'),
      $grand_total=$('#amt1'),
      $vat=$('#vat1'),
      $gt2=$('#tot1');

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
    <td style = "text-align:left;font-size:18px;color:darkcyan">Total AMOUNT</td>
    <td style = "text-align:center;font-size:20px;color:Black"><input id="amt1" name="amt1" readonly style="text-align:center;border:0px;background:none;"> </input></td>
</tr>
<tr style = "font-weight: bold;">
    <td></td><td></td><td></td>
    <td style = "text-align:left;font-size:18px;color:darkcyan">5% VAT AMOUNT</td>
    <td style = "text-align:center;font-size:20px;color:Black"><input id="vat1" name="vat1" readonly style="text-align:center;border:0px;background:none;"> </input></td>
</tr>
<tr style = "font-weight: bold;">
    <td></td><td></td><td></td>
    <td style = "text-align:left;font-size:18px;color:darkcyan">GRAND TOTAL</td>
    <td style = "text-align:center;font-size:20px;color:Black"><input id="tot1" name="tot1" readonly style="text-align:center;border:0px;background:none;"> </input></td>
</tr>


</table></div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="row">
    <div class="col-4">
        <p style="font-size:22px;margin-left:80px;color:Black">Receiver Signature :  </p>
        <p style="font-size:20px;margin-left:50px;color:Black">            ----------------------------        </p>
    </div>

    <div class="col-6.5">
        <p style="font-size:22px;margin-left:300px;color:Black">For Azam Facility Management L.L.C  </p>
        <p style="font-size:20px;margin-left:350px;color:Black">            ----------------------------        </p>
    </div>
</div>



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



