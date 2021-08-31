<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->

    <link rel="stylesheet" href="{{URL::to('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{URL::to('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="assets/css/fontastic.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="{{URL::to('assets/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700')}}">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{URL::to('assets/css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{URL::to('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{URL::to('assets/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{URL::to('assets/css/custom.css')}}">
    <!-- library  -->

    <!-- for export -->
    <link href="{{URL::to('assets1/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets1/css/style.css')}}" rel="stylesheet">
    <!-- Favicon-->
    <link href='assets/style_login/image/logo.png' rel='icon' type='image/x-icon'/>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-image:  linear-gradient(aquamarine, white);;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }


    </style>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="{{URL::to('assets/style_login/image/logo.png')}}" alt="person" class="img-fluid rounded-circle" data-toggle="modal" data-target="#profile">
            <h2 class="h5">Azam</h2>
            <span> Facility Management L.L.C</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="assets/index.html" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">R</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        @yield('menu')
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      @include('header.navbar')
      <!-- Counts Section -->
      @yield('contant')
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p style="color: white">Azam Facility Management LLC &copy; 2021</p>
            </div> <div class="col-sm-5">
                <input  type="text"style="text-align:center;border:0px;background:none;margin-left:300px;color:white"  value="" size="20"> </input>
              </div>
            <div class="col-sm-6 text-right">
              <p><a href="#" class="external"></a></p>
            </div>
          </div>
        </div>
      </footer>
    </div>


    <!-- Modal Profile-->
    <div class="modal fade" id="profile" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-write">
                    <h4 class="modal-title">Profile</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <form action="{{route('profile')}}" method = "post"><!-- form delete -->
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="form-group col">
                                <div class="sidenav-header-inner"><img src="{{URL::to('assets/img/Ahmed.png')}}" alt="profile" class="img-fluid rounded-circle" width="10%"></div>
                                <br>
                                <div class="row">
                                    <label for="Name" class="col-sm-4 control-label">Name : </label>
                                    <span class="font-weight-bolder">{{ ucfirst(Auth()->user()->name) }}</span>
                                </div>

                                <div class="row">
                                    <label for="Email" class="col-sm-4 control-label">Email : </label>
                                    <span>{{ ucfirst(Auth()->user()->email) }}</span>
                                </div>

                                <div class="row">
                                    <label for="Name" class="col-sm-4 control-label">Role Name : </label>
                                    @if(ucfirst(Auth()->user()->role_id_user =='2'))
                                        <span>Amdin</span>
                                        @elseif(ucfirst(Auth()->user()->role_id_user =='3'))
                                        <span>Super User</span>
                                        @elseif(ucfirst(Auth()->user()->role_id_user =='1'))
                                        <span>Normal User</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <label for="Email" class="col-sm-4 control-label">Date Join : </label>
                                    <span>{{ ucfirst(Auth()->user()->created_at) }}</span>
                                </div>
                                <div class="row">
                                    <label class="col-sm-4 control-label">Change Picture</label>
                                    <div class="col-sm-8">
                                        <input type="file" id="avatar"name="avatar" class="form-control" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icofont icofont-eye-alt"></i>Close</button>
                        <button type="submit" id=""name="" class="btn btn-success  waves-light"><i class="icofont icofont-check-circled"></i>Update</button>
                    </div>
                </form><!-- form delete end -->
            </div>
        </div>
    </div> <!-- End Modal Profile-->

    <!-- JavaScript files-->

    <script src="{{URL::to('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::to('assets/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{URL::to('assets/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{URL::to('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{URL::to('assets/js/charts-home.js')}}"></script>

    <!-- for export all -->
    <script src="{{URL::to('assets1/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{URL::to('assets1/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

    <script>
        // select update js
        $(document).on('click', '.edit', function()
        {
            var _this = $(this).parents('tr');
            $('#id').val(_this.find('.id').text());
            $('#e_name').val(_this.find('.name').text());
            $('#e_sex').val(_this.find('.sex').text());
            $('#e_dateOfBirth').val(_this.find('.dateOfBirth').text());
            $('#e_email').val(_this.find('.email').text());
            $('#e_phone').val(_this.find('.phone').text());
            $('#e_jobPosition').val(_this.find('.jobPosition').text());
            $('#e_salary').val(_this.find('.salary').text());
        });
    </script>

    <!-- validate form employee -->
    <script>
        $("#validateForm").validate({
            rules: {
                name: {
                        required: true,
                    },
                    sex: {
                        required: true,
                    },
                    dateOfBirth: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    phone: {
                        required: true,
                    },
                    jobPosition: {
                        required: true,
                    },
                    salary: {
                        required: true,
                    },

            },
            messages: {
                name: {
                        required: "Please enter full name",
                    },
                    sex: {
                        required: "Please enter sex",
                    },
                    dateOfBirth: {
                        required: "Please enter date of birth",
                    },
                    email: {
                        required: "Please enter your email",
                    },
                    phone: {
                        required: "Please enter phone",
                    },
                    jobPosition: {
                        required: "Please enter your position",
                    },
                    salary: {
                        required: "Please enter salary",
                    },

            },
        });
    </script>

    <!-- export Scripts -->
    <script>
        $(document).ready(function(){
            $('#example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'Schedule For 19 / 7 / 2021'},

                    {extend: 'print',
                     customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
                    }
                    }
                ]
            });
        });

    </script>
    <!-- Main File-->
    <script src="{{URL::to('assets/js/front.js')}}"></script>

  </body>
</html>
