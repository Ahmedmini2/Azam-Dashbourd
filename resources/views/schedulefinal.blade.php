
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
        <div class="container-fluid">
        @foreach($result as $value)
        <font face="Impact"  color="black"> <b> <h2 style="text-align:center;font-size:28px;"> Schedule For  {{$value->date}} </h2> </b> </font><br>
 @endforeach


 @foreach($result2 as $value2)
 <font face="Impact" size="20px" color="black"> <h1 style="text-align:center;font-size:40px;"> <b> {{$value2->prop}} </b> </h1> </font>
 <font face="Impact" size="20px" color="black"> <h1 style="text-align:center;font-size:20px;">  {{$propertye[0]->address}} </h1> </font><hr> <br>
             <table id="" class="table table-striped table-bordered" style="width: 100%;font-size:20px;">


                <thead>


                    <tr>

                    <th style="font-size:20px;text-align:center;" >Department</th>
                    <th style="text-align:center;">Staff Quantity</th>
                    <th style="text-align:center;">Time In</th>
                        <th style="text-align:center;">Time Out</th>

                        <th style="text-align:center;">Staff Name</th>
                        <th style="text-align:center;">Pickup Point</th>
                    </tr>

                </thead>
                <tbody>

                @foreach($result3 as $value3)
                @if ($value3->prop==$value2->prop)
                    <tr>

                    <td style="font-size:27px;text-align:center;" >{{$value3->depar}}</td>
                    <td class="quan"style="text-align:center;"> {{$value3->quan}}</td>
                    <td class="tin"style="text-align:center;">{{$value3->tin}}</td>
                        <td class="tout"style="text-align:center;">{{$value3->tout}}</td>

                        <td class="snames" style="text-align:center;"> {{$value3->sname}}</td>
                        <td class="pick"style="text-align:center;"> {{$value3->pick}}</td>
                    </tr>
                    @endif
                    @endforeach

                </tbody>
            </table>   <br> <br>
            @endforeach
        </div>

        </form>

    </section>





@endsection

