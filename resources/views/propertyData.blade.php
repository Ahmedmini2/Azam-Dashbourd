
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
                        <th>Tax Registraation No</th>
                        <th>Ref No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Email</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($query as $value)
                    <tr>
                        <td class="id">{{$value->id}}</td>
                        <td class="id">{{$value->taxnumber}}</td>
                        <td class="id">{{$value->refnumber}}</td>
                        <td class="name">{{$value->name}}</td>
                        <td class="phone">{{$value->phone}}</td>
                        <td class="address">{{$value->address}}</td>
                        <td class="address">{{$value->email}}</td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>



@endsection

