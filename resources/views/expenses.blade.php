





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
                <li class="breadcrumb-item active">Expenses Form</li>
            </ul>
        </div>
    </div>
    <section class="forms">
        <div class="container-fluid">
            <!-- Page Header-->
            <header>
                <h1 class="h3 display">Expenses Form</h1>
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Expenses Data</h4>
                        </div>

                        <div class="card-body">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <form id="validateForm" method="POST" action="{{route('saveexpenses')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="des" name="des" placeholder="Enter Item Descriotion">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="quan" name="quan" onchange="calculateAmount()" placeholder="Enter Quantity">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Unit Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="uprice" name="uprice"onchange="calculateAmount()"  placeholder="Enter Price per Unit">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Total</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="total" name="total" radeonly placeholder="">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-4 offset-sm-2">
                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="{{route('showexpenses')}}">Show All Expenses</a>
                                    </div>
                                </div>
                            <from>

                            <script>



                                        function calculateAmount() {
                                            var x = document.getElementById("quan").value;
                                        var y = document.getElementById("uprice").value;
                                        var z=0;
                                          var z = x * y;
                /*display the result*/
                                           var divobj = document.getElementById('total');
                                            divobj.value = z;
                                        }
                                 </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
