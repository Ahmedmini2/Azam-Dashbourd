
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
            
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Invoice Id</th>
                        <th>Description</th>
                        <th>Property Name</th>
                        <th>Department Name</th>
                        <th>Grand Total</th>
                        <th>Status</th>
                      
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($query as $value)
                    <tr>
                        <td class="id">{{$value->id}}</td>
                        <td class="id">{{$value->invoice_id}}</td>
                        <td class="name">Scheduled At {{$value->date}}</td>
                        <td class="phone">{{$value->prop}}</td>
                        <td class="address">{{$value->depar}}</td>
                        <td class="address">{{$value->grand_total}}</td>
                        @if ($value->status==true)
                        <td class="address" style="background-color:hsl(128, 93%, 51%);color:white;">Paied</td>
                        @else 
                        <td class="address" style="background-color:hsl(0, 100%, 45%);color:white;">Not Pay</td>

                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>  
        </div>
    </section>

   

@endsection

