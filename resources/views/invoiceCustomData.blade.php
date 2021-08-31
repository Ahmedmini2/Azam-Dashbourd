
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
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-4 center">
                    @foreach ($query4 as $prop1)
                    <P style="font-size: 30px"><b>{{$prop1->prop}}</b></P>
                    @endforeach

                </div>


            <table  class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Invoice Id</th>
                        <th>Date</th>
                        <th>Vat</th>
                        <th>Amount</th>
                        <th>Status</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($query as $value)
                    <tr>
                        <td class="id">{{$value->id}}</td>
                        <td class="id">{{$value->invoice_id}}</td>
                        <td class="name"> {{$value->date}}</td>
                        <td class="phone">{{$value->vat}}</td>
                        <td class="address">{{$value->amount}}</td>
                        @if ($value->status==true)
                        <td class="address" style="background-color:hsl(128, 93%, 51%);color:white;">Paied</td>
                        @else
                        <td class="address" style="background-color:hsl(0, 100%, 45%);color:white;">Not Pay</td>

                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row" style="margin-left: 60%;margin-top:10%">
                <div class="col-12" >
                    <P style=""> Total = {{$query3 }}</P>
                </div>
            </div>
        </div>
    </section>



@endsection

