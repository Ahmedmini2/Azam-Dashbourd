@extends('layouts.master')
@section('menu')
@include('sidebar.employee')
@endsection
@section('contant')

    <!-- Breadcrumb-->
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item active">Forms / New</li>
            </ul>
        </div>
    </div>
    <section class="forms">
        <div class="container-fluid">
            <!-- Page Header-->
            <header>
                <h1 class="h3 display">Staff Form</h1>
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Staff Information</h4>
                        </div>

                        <div class="card-body">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <form id="validateForm" method="POST" action="{{route('property/save')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Tax Registraation No: </label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tax" name="tax" placeholder="Enter Tax Registraation No ">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Ref Number</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ref" name="ref" placeholder="Enter Ref No ">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address ">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email ">
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <div class="col-sm-4 offset-sm-2">
                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button  class="btn btn-success"><a href="{{route('report')}}"><i class="fa fa-plus" type="submit"></i></a>Show All Employee</button>
                                    </div>
                                </div>
                            <from>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
