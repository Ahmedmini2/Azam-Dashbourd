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
                <li class="breadcrumb-item active">Invoice New</li>
            </ul>
        </div>
    </div>
    <section class="forms">
        <div class="container-fluid">
            <!-- Page Header-->
            <header>
                <h1 class="h3 display">Add Invoice</h1>
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Invoice For Customer</h4>
                        </div>

                        <div class="card-body">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <form id="validateForm" method="GET" action="{{route('invoicelogo')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Property Name</label>
                                    <div class="col-sm-10">
                                    <select id="pn" name="pn">
                                         @foreach($query as $value)
                                             <option value="{{$value->prop}}"> {{$value->prop}}</option>

                                         @endforeach
                                         </select>
                                        </div>
                                </div>


                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                                    <div class="col-sm-10">
                                    <select id="dp" name="dp">
                                        <option value="Kitchin">Kitchin</option>
                                        <option value="Cleaning">Cleaning</option>
                                        <option value="Delivery">Delivery</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Stewarding">Stewarding</option>
                                        <option value="F&B">F&B</option>
                                        <option value="SPA">SPA</option>
                                        <option value="Laundry">Laundry</option>
                                        <option value="Landscaping">Landscaping</option>

                                    </select>
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <div class="col-sm-4 offset-sm-2">
                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save</button>

                                    </div>
                                </div>
</from>



                        </div>




                    </div>
                </div>
            </div>








                    </div>
                </div>
            </div>




        </div>
    </section>

@endsection
