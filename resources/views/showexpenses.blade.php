
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
                        <th style="text-align:center;">ID</th>
                        <th style="text-align:center;">Date</th>
                        <th style="text-align:center;">Description</th>
                        <th style="text-align:center;">Quantity</th>
                        <th style="text-align:center;">Unit Price</th>
                        <th style="text-align:center;">Total</th>



                    </tr>
                </thead>
                <tbody>
                    @foreach($query as $value)
                    <tr>
                        <td style="text-align:center;  "class="id">{{$value->id}}</td>
                        <td style="text-align:center; "class="name">{{$value->date}}</td>
                        <td style="text-align:center; "class="phone">{{$value->description}}</td>
                        <td style="text-align:center; "class="address">{{$value->quantity}}</td>
                        <td style="text-align:center; "class="address">{{$value->unit_price}}</td>
                        <td style="text-align:center; "class="address">{{$value->total}}</td>
                        @endforeach




                    </tr>

                </tbody>
            </table>
        </div>

    </section>



@endsection

