
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
            <form style="text-align:center;" method="GET" action="{{route('schedulefinal')}}"> 
            <select id="ddy" name="ddy">Date   
            @foreach($query as $value)  
            <option value="{{$value->date}}"> {{$value->date}}</option>
            
            @endforeach
            </select>
           
            <input type="submit" class="btn btn-primary" id="btn" name = "btn" value="Search"> </input>
</form>



            <table id="example" class="table table-striped table-bordered" style="width: 100%;">

          
                <thead>
                    <tr>
                    <th>ID</th>
                        <th>Date</th>
                        <th> Property Name </th>
                        <th>Department</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th >Staff Quantity</th>
                        <th>Staff Name</th>
                        <th>Pickup Point</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($query as $value)
                    <tr>
                        <td class="id">{{$value->id}}</td>
                        <td class="date">{{$value->date}}</td>
                        <td class="prop">{{$value->prop}}</td>
                        <td class="dep">{{$value->depar}}</td>
                        <td class="tin">{{$value->tin}}</td>
                        <td class="tout">{{$value->tout}}</td>
                        <td class="quan"> {{$value->quan}}</td>
                        <td class="snames"> {{$value->sname}}</td>
                        <td class="pick"> {{$value->pick}}</td>
                        <td class="pick"> <img style="width:20%;" src="{{$value->file}}"></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>  
        </div>
    </section>

   


@endsection

