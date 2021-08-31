<!-- menu  -->
<div class="main-menu">
    <h5 class="sidenav-heading">Menus</h5>
    <ul id="side-main-menu" class="side-menu list-unstyled">
        <li class="active">
            <a href="{{route('dashboard')}}">
                <i class="fa fa-th-large"></i> Dashboard
            </a>
        </li>


        <li>
        <a href="#form" aria-expanded="false" data-toggle="collapse">
            <i class="icon-interface-windows">
            </i>Staff
        </a>
            <ul id="form" class="collapse list-unstyled">
            <li><a href="{{route('form/employee/new')}}"><i class="fa fa-th-large"></i>Staff Form</a></li>
            <li> <a href="{{route('report')}}"><i class="fa fa-th-large"></i> Staff Data </a>
            <li> <a href="{{route('staffSalary')}}"><i class="fa fa-th-large"></i> Staff Salary </a>

            </ul>
        </li>

        <li>
        <a href="#form" aria-expanded="false" data-toggle="collapse">
            <i class="icon-interface-windows">
            </i>Scheduling
        </a>
            <ul id="form" class="collapse list-unstyled">
            <li> <a href="{{route('schedule')}}"><i class="fa fa-th-large"></i> Scheduleing </a>
            <li> <a href="{{route('scheduledata')}}"><i class="fa fa-th-large"></i> Schedule Data  </a>
            </ul>
        </li>




        <li>
        <a href="#form" aria-expanded="false" data-toggle="collapse">
            <i class="icon-interface-windows">
            </i>Properties
        </a>
            <ul id="form" class="collapse list-unstyled">
            <li> <a href="{{route('property')}}"><i class="fa fa-th-large"></i> Properties Form </a>
            <li> <a href="{{route('propertydata')}}"><i class="fa fa-th-large"></i> Properties Data  </a>
            </ul>
        </li>



        <li>
            <a href="#form" aria-expanded="false" data-toggle="collapse">
                <i class="icon-interface-windows">
                </i>Invoice
            </a>
                <ul id="form" class="collapse list-unstyled">
                <li> <a href="{{route('invoiceAdd')}}"><i class="fa fa-th-large"></i> Add Tax Invoice </a>
                    <li> <a href="{{route('invoiceCustom')}}"><i class="fa fa-th-large"></i> Add Tax Invoice Custom </a>
                <li> <a href="{{route('invoiceAllData')}}"><i class="fa fa-th-large"></i> Invoice Data  </a>
                <li> <a href="{{route('invoiceCustomSearch')}}"><i class="fa fa-th-large"></i> Invoice Search  </a>
                </ul>
            </li>



        <li>
            <a href="#form" aria-expanded="false" data-toggle="collapse">
                <i class="icon-interface-windows">
                </i>Expenses
            </a>
                <ul id="form" class="collapse list-unstyled">
                <li> <a href="{{route('expenses')}}"><i class="fa fa-th-large"></i> Add Expenses </a>
                <li> <a href="{{route('showexpenses')}}"><i class="fa fa-th-large"></i> Expenses Data  </a>

                </ul>
            </li>

    </ul>
</div>
