
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
                        <th style="text-align:center;">Name</th>
                        <th style="text-align:center;">Phone</th>
                        <th style="text-align:center;">E-ID</th>
                        <th style="text-align:center;">Days Of Work</th>
                        <th style="text-align:center;">Total Salary</th>
                        <th  style="text-align:center;">Total Hours</th>
                      
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($query5 as $value)
                    <tr>
                        <td style="text-align:center;  "class="id">{{$value->id}}</td>
                        <td style="text-align:center; "class="name">{{$value->name}}</td>
                        <td style="text-align:center; "class="phone">{{$value->phone}}</td>
                        <td style="text-align:center; "class="address">{{$value->eid}}</td>
                        <td style="text-align:center; "class="address">{{$query}}</td>
                        <td style="text-align:center; "class="address">{{$value->salary*$query}}</td>
                        <td style="text-align:center;" class="address"><input id="t_hours" name="t_hours" style="text-align:center;border:0px;background:none" type="text" size="10"></input></td>
                        @endforeach
                        
                        
                        
                        
                    </tr>
                    
                </tbody>
            </table>  
        </div>
        
    </section>

   

@endsection

