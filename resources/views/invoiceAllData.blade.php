
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




            <table  class="table table-striped table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>

                        <th>Property</th>
                        <th>Total</th>
                        <th>Payed</th>
                        <th>Recivable</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($query9 as $value)
                    <tr>

                        <td class="name"> {{$value->prop}}</td>
                        <td class="phone">{{$value->sum}}</td>
                        <td class="address"></td>


                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row" style="margin-left: 60%;margin-top:10%">
                <div class="col-12" >
                    <P style=""> Total = {{$query10}}</P>
                </div>
            </div>
        </div>
    </section>



@endsection
