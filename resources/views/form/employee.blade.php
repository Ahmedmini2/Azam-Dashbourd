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
                            <form id="validateForm" method="POST" action="{{route('form/employee/save')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select mr-sm-2" id="gender" name="gender">
                                            <option disabled selected>Choose sex</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Date Of Birth</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter date of birth">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">National Id</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="eid" name="eid" placeholder="Enter National Id">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nationality</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select mr-sm-2" onchange="price()" id="nationality" name="nationality">
                                            <option disabled selected>Choose You Nationality</option>
                                            <option value="BGD">Bangladesh</option>
                                            <option value="IND">India</option>
                                            <option value="NIG">Nigeria</option>
                                            <option value="UQN">Uqanda</option>
                                            <option value="GAN">Ghana</option>
                                            <option value="NPL">Nepal</option>
                                            <option value="PKS">Pakistan</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Salary</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="salary" name="salary">
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

                            
                            <script>
                                    function price() {

                                        var x = document.getElementById("nationality").value;
                                        var y=0;
                                        if (x == "NIG" || x == "UQN" || x == "GAN"){
                                            y = 56.6;
                                            $('#salary').attr('value', y);
                                            document.getElementById("salary").innerHTML = y;
                                            
                                        }
                                        else{
                                            y = 0;
                                            $('#salary').attr('value', y);
                                            document.getElementById("salary").innerHTML = y;

                                        }
                                       

                                            }

                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection