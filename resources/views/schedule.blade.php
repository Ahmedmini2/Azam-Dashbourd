<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />

<script>



function addField( table ){



    var tableRef = document.getElementById(table);
var newRow   = tableRef.insertRow(-1);

var newCell  = newRow.insertCell(0);
var newElem = document.createElement( 'input' );
newElem.setAttribute("name", "Id[]");
newElem.setAttribute("id", "Id");
newElem.setAttribute("type", "text");
newElem.setAttribute("style", "display:none;border:0;width:40px;");
newCell.appendChild(newElem);

newCell = newRow.insertCell(1);
newElem = document.createElement( 'input' );
newElem.setAttribute("name", "Name[]");
newElem.setAttribute("type", "text");
newElem.setAttribute("id", "Name");

newElem.setAttribute("style", "display:none;border:0;width:200px;");

newCell.appendChild(newElem);

newCell = newRow.insertCell(2);
newElem = document.createElement( 'input' );
newElem.setAttribute("id", "Date");
newElem.setAttribute("name", "Date[]");
newElem.setAttribute("style", "display:none;border:0;width:200px;");
newElem.setAttribute("type", "date");
newCell.appendChild(newElem);


newCell = newRow.insertCell(3);
newElem = document.createElement( 'select' );
var op0 = document.createElement('OPTION');
 op0.setAttribute('value', "");
var op1 = document.createElement('OPTION');
 op1.setAttribute('value', "Borj Al Arab");
var op2 = document.createElement('OPTION');
 op2.setAttribute('value', "Albarsha");
var op3 = document.createElement('OPTION');
 op3.setAttribute('value', "Dubai");

 op0.appendChild( document.createTextNode( '' ) );
op1.appendChild( document.createTextNode( 'Borj Al Arab' ) );
op2.appendChild( document.createTextNode( 'Albarsha' ) );
op3.appendChild( document.createTextNode( 'Dubai' ) );

newElem.appendChild(op0);
newElem.appendChild(op1);
newElem.appendChild(op2);
newElem.appendChild(op3);



newElem.setAttribute("id", "Property_Name");
newElem.setAttribute("name", "Property_Name[]");
newElem.setAttribute("style", "border:1;width:90px;");
newCell.appendChild(newElem);





newCell = newRow.insertCell(4);
newElem = document.createElement( 'select' );
var op0 = document.createElement('OPTION');
 op0.setAttribute('value', "");
var op1 = document.createElement('OPTION');
 op1.setAttribute('value', "Borj Al Arab");
var op2 = document.createElement('OPTION');
 op2.setAttribute('value', "Albarsha");
var op3 = document.createElement('OPTION');
 op3.setAttribute('value', "Dubai");

 op0.appendChild( document.createTextNode( '' ) );
op1.appendChild( document.createTextNode( 'Borj Al Arab' ) );
op2.appendChild( document.createTextNode( 'Albarsha' ) );
op3.appendChild( document.createTextNode( 'Dubai' ) );

newElem.appendChild(op0);
newElem.appendChild(op1);
newElem.appendChild(op2);
newElem.appendChild(op3);



newElem.setAttribute("id", "Department");
newElem.setAttribute("style", "border:1;width:90px;");
newCell.appendChild(newElem);
newElem.setAttribute("name", "Department[]");
newElem.setAttribute("style", "border:1;width:90px;");
newElem.setAttribute("option", "A");
newCell.appendChild(newElem);


newCell = newRow.insertCell(5);
newElem = document.createElement( 'input' );
newElem.setAttribute("id", "TimeIn");
newElem.setAttribute("name", "TimeIn[]");
newElem.setAttribute("style", "border:1;width:90px;");
newElem.setAttribute("type", "time");
newCell.appendChild(newElem);


newCell = newRow.insertCell(6);
newElem = document.createElement( 'input' );
newElem.setAttribute("id", "TimeOut");
newElem.setAttribute("name", "TimeOut[]");
newElem.setAttribute("style", "border:1;width:90px;");
newElem.setAttribute("type", "time");
newCell.appendChild(newElem);



newCell = newRow.insertCell(7);
newElem = document.createElement( 'select' );
var op0 = document.createElement('OPTION');
 op0.setAttribute('value', "");
var op1 = document.createElement('OPTION');
 op1.setAttribute('value', "Ahmed");
var op2 = document.createElement('OPTION');
 op2.setAttribute('value', "A");
var op3 = document.createElement('OPTION');
 op3.setAttribute('value', "B");

 op0.appendChild( document.createTextNode( '' ) );
op1.appendChild( document.createTextNode( 'Ahmed' ) );
op2.appendChild( document.createTextNode( 'A' ) );
op3.appendChild( document.createTextNode( 'B' ) );

newElem.appendChild(op0);
newElem.appendChild(op1);
newElem.appendChild(op2);
newElem.appendChild(op3);



newElem.setAttribute("id", "StaffName");
newElem.setAttribute("style", "border:1;width:90px;");
newCell.appendChild(newElem);
newElem.setAttribute("name", "StaffName[]");
newElem.setAttribute("style", "border:1;width:65px;");
newElem.setAttribute("option", "A");
newCell.appendChild(newElem);


newCell = newRow.insertCell(8);
newElem = document.createElement( 'select' );
var op0 = document.createElement('OPTION');
 op0.setAttribute('value', "");
var op1 = document.createElement('OPTION');
 op1.setAttribute('value', "Alkhebasi");
var op2 = document.createElement('OPTION');
 op2.setAttribute('value', "Home Point");
var op3 = document.createElement('OPTION');
 op3.setAttribute('value', "B");

 op0.appendChild( document.createTextNode( '' ) );
op1.appendChild( document.createTextNode( 'Alkhebasi' ) );
op2.appendChild( document.createTextNode( 'Home Point' ) );
op3.appendChild( document.createTextNode( 'B' ) );

newElem.appendChild(op0);
newElem.appendChild(op1);
newElem.appendChild(op2);
newElem.appendChild(op3);



newElem.setAttribute("id", "PickupPoint");
newElem.setAttribute("style", "border:1;width:90px;");
newCell.appendChild(newElem);
newElem.setAttribute("name", "PickupPoint[]");
newElem.setAttribute("style", "border:1;width:90px;");
newElem.setAttribute("option", "A");
newCell.appendChild(newElem);




}
</script>
@extends('layouts.master')
@section('menu')
@include('sidebar.report')
@endsection
@section('contant')



    <!-- Breadcrumb-->

    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active">Data / Table</li>
            </ul>
        </div>
    </div>
    <br>
    <section class="forms">
        <div class="container-fluid" id="ee2">

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif


            <table id="tbl2" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>

                    <tr>


                        <th>Schedule</th>
                        <th>Date</th>
                        <th> Property Name </th>
                        <th>Department</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Staff Quantity</th>
                        <th>Staff Name</th>
                        <th>Pickup Point</th>



                    </tr>
                </thead>
                <tbody>
                   <form  method="POST" action="scheduledata/save" enctype="multipart/form-data">
                   @csrf
                    <tr>
                        <td class="name"><input type= "text" style="border:0;width:200px;" id="name" name="name" placeholder="schedule"></input></td>
                        <td class="sex"><input type= "date" style="border:0;width:120px;" id="date" name="date" ></td>
                        <td class="dateOfBirth"><select  id="prop"  name="prop">
                            <option value=""></option>
                            @foreach($query2 as $ppr)
                            <option value="{{$ppr->name}}">{{$ppr->name}}</option>
                            @endforeach
                        </select>
                    </td>
                        <td class="jobPosition"><select id="depar" name= "depar" >
                        <option value=""></option>
                            <option value="Kitchin">Kitchin</option>
                            <option value="Cleaning">Cleaning</option>
                            <option value="Delivery">Delivery</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Stewarding">Stewarding</option>
                            <option value="F&B">F&B</option>
                            <option value="SPA">SPA</option>
                            <option value="Laundry">Laundry</option>
                            <option value="Landscaping">Landscaping</option>

                        </select></td>
                        <td class="email">
                                <input type="time" id="tin" name= "tin"></inpute>
                            </td>
                            <td class="email">
                                <input type="time" id="tout" name= "tout"></inpute>
                            </td>
                            <td class="id"><input type= "number" style="border:0;width:40px;" id="quan" name="quan"></input></td>

                        <td class="email"><select size = 10 multiple id="sname" name= "sname">
                        <option value=""></option>
                        @foreach($query as $item)
                        <option ondblclick="addstaf();" value="{{$item->name}}">{{$item->name}}</option>
                                 @endforeach

                        </select>
                        <script>


                            var all = "";
                            var all2 = "";

                            var counter = 0 ;
                            function addstaf(){
                                var q = document.getElementById("quan").value;
                                if(q=="" || q<=0 ){
                                    alert("You Cant Add More Than The Quantity");
                                }else{
                                    var sname = document.getElementById("sname").value;
                                    all = all + " <br> " + sname;
                                    all2 = sname + " , " + all2;
                                    document.getElementById("prag").innerHTML = all;
                                    document.getElementById("quan").value = document.getElementById("quan").value -1 ;

                                    counter += 1;
                                    document.getElementById("s1").value = counter;

                                    document.getElementById("s2").value = all2;

                                }
                            }


                        </script>
                        <p id="prag"> </p>
                        <br>
                        <input hidden type="text" id="s1" name= "s1"></input>
                        <input hidden type="text" id="s2" name= "s2"></input>

                        <td class="phone"><select id="pick" name= "pick">
                        <option value=""></option>
                            <option value="Company">Company</option>
                            <option value="Abo Hail">Abo Hail</option>
                            <option value="Hadier Supermarket">Hadier Supermarket</option>
                            <option value="Alrigga">Alrigga</option>
                            <option value="Jumira">Jumeirah</option>
                            <option value="Albarsha">Albarsha</option>
                            <option value="Salah Aldeen">Salah Aldeen</option>
                            <option value="Warehouse 2">Warehouse 2</option>
                            <option value="Area 51">Area 51</option>

                        </select></td>


                        </td>
                    </tr>



                </tbody>
                <button  class="btn btn-primary"  onclick="addField('tbl2');">+</button>
            <button type="submit" class="btn btn-primary">Save</button>

            </table>
            <button  class="btn btn-primary"  onclick="addField('tbl2');">+</button>
            <button type="submit" class="btn btn-primary">Save</button>


                        </form>











@endsection




