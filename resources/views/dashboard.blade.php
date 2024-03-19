<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="robots" content="noindex,nofollow" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Hospital Management System -HMS</title>
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('asset/upload/aedemodir/bootstrap5/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('asset/upload/aedemodir/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('asset/upload/aedemodir/bootstrap5/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('asset/upload/aedemodir/bootstrap5/css/nav.css')}}" rel="stylesheet">
        <link href="{{ asset('asset/upload/aedemodir/bootstrap5/css/global.css')}}" rel="stylesheet">
        <link href="{{ asset('asset/upload/aedemodir/bootstrap5/css/dashboard.css')}}"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
            href="{{ asset('asset/upload/aedemodir/bootstrap5/css/dhtmlxcalendar.css')}}" />
        <script src="{{ asset('asset/upload/aedemodir/bootstrap5/js/dhtmlxcalendar.js')}}"></script>
        <script>
            var myCalendar;
            
            function doOnLoad() {
                myCalendar = new dhtmlXCalendarObject(["cal_1", "cal_2", "cal_3"]);
            }
        </script>
        <script src="{{ asset('asset/upload/aedemodir/bootstrap5/js/chart.min.js')}}"></script>
        <link href="{{ asset('asset/upload/aedemodir/bootstrap5/css/table.css')}}" rel="stylesheet">
    </head>
    <body onLoad="doOnLoad();">
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3"
                href="{{ asset('asset/upload/aedemodir/950a4152c2b4aa3ad78bdd6b366cc179/index.html')}}">
                <h5 style="color:#fd7e14;">Hospital Management System</h5>
            </a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav hide">
                <li class="nav-item sign_box_1">
                    <a class="nav-link  text-light" href="#"><i class="fa fa-comment"></i> 3</a>
                </li>
                <li class="nav-item dropdown notification">
                    <a class="nav-link dropdown-toggle text-white  border-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-expanded="false"><button type="button"
                        class="border-0 btn bg-dark text-white   position-relative">
                    <i class="fa fa-bell"></i>
                    <span class="position-absolute start-100 translate-middle badge rounded-pill bg-danger"
                        style="top:5px;">
                    3+
                    <span class="visually-hidden">unread messages</span>
                    </span>
                    </button></a>
                    <ul class="dropdown-menu drop_1" style="left:auto; right:0; min-width:300px;">
                        <li class="noti_p">Notification <span class="pull-right"><a href="#">Clear All</a></span></li>
                        <li class="noti_p1">
                            <div class="noti_i p-2  row m-0">
                                <div class="col-sm-3">
                                    <div class="noti_il">
                                        <a href="#"><img
                                            src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}"
                                            alt="abc" class="rounded-circle w-100"></a>
                                    </div>
                                </div>
                                <div class="col-sm-9 p-0">
                                    <div class="noti_ir">
                                        <p class="mb-0">Caleb Flakelar commented on Admin
                                            <small class="text-muted font-13">1 min ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="noti_p1">
                            <div class="noti_i p-2  row m-0">
                                <div class="col-sm-3">
                                    <div class="noti_il">
                                        <a href="#"><img
                                            src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}"
                                            alt="abc" class="rounded-circle w-100"></a>
                                    </div>
                                </div>
                                <div class="col-sm-9 p-0">
                                    <div class="noti_ir">
                                        <p class="mb-0">Caleb Flakelar commented on Admin
                                            <small class="text-muted font-13">1 min ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="noti_p1">
                            <div class="noti_i p-2  row m-0">
                                <div class="col-sm-3">
                                    <div class="noti_il">
                                        <a href="#"><img
                                            src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}"
                                            alt="abc" class="rounded-circle w-100"></a>
                                    </div>
                                </div>
                                <div class="col-sm-9 p-0">
                                    <div class="noti_ir">
                                        <p class="mb-0">Caleb Flakelar commented on Admin
                                            <small class="text-muted font-13">1 min ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="noti_p1 border-0">
                            <div class="noti_i p-2  row m-0">
                                <div class="col-sm-3">
                                    <div class="noti_il">
                                        <a href="#"><img
                                            src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}"
                                            alt="abc" class="rounded-circle w-100"></a>
                                    </div>
                                </div>
                                <div class="col-sm-9 p-0">
                                    <div class="noti_ir">
                                        <p class="mb-0">Caleb Flakelar commented on Admin
                                            <small class="text-muted font-13">1 min ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item sign_box dropdown">
                    <a class="nav-link dropdown-toggle text-white  border-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-expanded="false"><img alt="abc" class="rounded-circle" width="30" height="30"
                        src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}">{{auth()->user()->name}}</a>
                    <ul class="dropdown-menu drop_2" style="left:auto; right:0; min-width:200px;">
                        <li class="small" style="padding: 0.25rem 1rem;">Welcome !</li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> My Account</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-gear"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-life-bouy"></i> Support</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Lock Screen</a></li>
                        <li><a class="dropdown-item" href="/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </header>
        <div class="container-fluid">
            <div class="row">
                @if(auth()->user()->user_type == 'admin')
                @include('admin.sidebars.admin')
                @endif
                @if(auth()->user()->user_type == 'staff')
                @include('admin.sidebars.staff')
                @endif
                @if(auth()->user()->user_type == 'patient')
                @include('admin.sidebars.patient')
                @endif
                <main class="col-md-9 ms-sm-auto common col-lg-10 px-md-4">
                    <div class="row analytic_1">
                        <div class="col-md-3">
                            <div class="analytic_1l">
                                <h5 class="mb-0">Dashboard</h5>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="analytic_1r pull-right">
                                <div class="input-group">
                                    <input type="text" class="form-control form_2" id="cal_2" placeholder="Search Here...">
                                    <span class="input-group-btn">
                                    <button class="btn btn-primary bg_1" type="button">
                                    <i class="fa fa-calendar cal_2"></i></button>
                                    </span>
                                </div>
                                <button type="submit" class="btn btn-primary bg_1"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row analytic_2 mt-4">
                        <div class="col-xl-3 col-md-5 col-lg-5">
                            <div class="analytic_2l">
                                <div class="analytic_2l1 bg-white">
                                    <h6 class="font_14">ACTIVE USERS </h6>
                                    <h3>180 <span class="pull-right col_3"><i class="fa fa-users"></i></span></h3>
                                    <p class="col_2 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27% <span
                                        class="pull-right col_3">Since last month</span></p>
                                </div>
                                <div class="analytic_2l1 bg-white mt-4">
                                    <h6 class="font_14">VIEWS PER MINUTE</h6>
                                    <h3>263 <span class="pull-right col_3"><i class="fa fa-file"></i></span></h3>
                                    <p class="col_4 mb-0"><i class="fa fa-long-arrow-down"></i> 1.08% <span
                                        class="pull-right col_3">Since previous week</span></p>
                                </div>
                                <div class="analytic_2l1 bg-white mt-4">
                                    <p class="mb-0">Enhance your Campaign for better outreach <i
                                        class="fa fa-long-arrow-right"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-md-7 col-lg-7">
                            <div class="analytic_2r bg-white">
                                <h6>SESSIONS OVERVIEW</h6>
                                <canvas id="multipleLineChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="row analytic_3 mt-4">
                        <div class="col-md-12">
                            <div class="analytic_3i bg-white">
                                <h6>SESSIONS BY COUNTRY</h6>
                                <canvas id="barSingleChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="row analytic_4 mt-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="analytic_4l">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">VIEWS PER MINUTE</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Refresh Report</a></li>
                                                <li><a class="dropdown-item" href="#">Export Report</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body table_tow">
                                        <img src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}"
                                            class="w-100">
                                        <table class="table table-responsive p-0 mt-2">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Page</th>
                                                    <th scope="col">Views</th>
                                                    <th scope="col">Bounce Rate</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>/Lorem/-analytics</td>
                                                    <td>25</td>
                                                    <td>@87.5%</td>
                                                </tr>
                                                <tr>
                                                    <td>/Lorem/-analytics</td>
                                                    <td>25</td>
                                                    <td>@87.5%</td>
                                                </tr>
                                                <tr>
                                                    <td>/Lorem/-analytics</td>
                                                    <td>25</td>
                                                    <td>@87.5%</td>
                                                </tr>
                                                <tr>
                                                    <td>/Lorem/-analytics</td>
                                                    <td>25</td>
                                                    <td>@87.5%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="analytic_4m">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">SESSIONS BY BROWSER</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Refresh Report</a></li>
                                                <li><a class="dropdown-item" href="#">Export Report</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="pieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="analytic_4r">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">SESSIONS BY OPERATING
                                            SYSTEM
                                        </h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Refresh Report</a></li>
                                                <li><a class="dropdown-item" href="#">Export Report</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}"
                                            height="200" class="w-100">
                                        <div class="analytic_4li mt-3 row">
                                            <div class="col-md-6">
                                                <div class="analytic_4lil text-center">
                                                    <h6>6,510<br> <span class="col_3">Online System</span></h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="analytic_4lil text-center">
                                                    <h6>2,031<br> <span class="col_3">Offline System</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row crm_2 mt-1">
                        <div class="col-lg-3 col-md-6">
                            <div class="analytic_2l1 bg-white">
                                <h6 class="font_14 col_3">Campaign</h6>
                                <h3>180 <span class="pull-right col_3"><i class="fa fa-users"></i></span></h3>
                                <p class="col_2 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27% <span
                                    class="pull-right col_3">Since last month</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="analytic_2l1 bg-white">
                                <h6 class="font_14 col_3">New Leads</h6>
                                <h3>180 <span class="pull-right col_3"><i class="fa fa-users"></i></span></h3>
                                <p class="col_4 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27% <span
                                    class="pull-right col_3">Since last month</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="analytic_2l1 bg-white">
                                <h6 class="font_14 col_3">Deals</h6>
                                <h3>180 <span class="pull-right col_3"><i class="fa fa-users"></i></span></h3>
                                <p class="col_2 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27% <span
                                    class="pull-right col_3">Since last month</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="analytic_2l1 bg-white">
                                <h6 class="font_14 col_3">Booked Reve</h6>
                                <h3>180 <span class="pull-right col_3"><i class="fa fa-users"></i></span></h3>
                                <p class="col_2 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27% <span
                                    class="pull-right col_3">Since last month</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row crm_3 mt-4">
                        <div class="col-md-6 col-lg-5">
                            <div class="analytic_4r">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">CAMPAIGNS</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">Yesterday</a></li>
                                                <li><a class="dropdown-item" href="#">Last Week</a></li>
                                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="barChart"></canvas>
                                        <div class="analytic_4li mt-3 row">
                                            <div class="col-md-4">
                                                <div class="analytic_4lil text-center">
                                                    <span class="mb-2 d-inline-block col_3"><i
                                                        class="fa fa-send"></i></span>
                                                    <h4>6,510</h4>
                                                    <h6><i class="fa fa-circle col_1"
                                                        style="margin-right:5px; vertical-align:middle;"></i> Total Sent
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="analytic_4lil text-center">
                                                    <span class="mb-2 d-inline-block col_3"><i
                                                        class="fa fa-flag"></i></span>
                                                    <h4>6,510</h4>
                                                    <h6><i class="fa fa-circle col_2"
                                                        style="margin-right:5px; vertical-align:middle;"></i> Reached
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="analytic_4lil text-center">
                                                    <span class="mb-2 d-inline-block col_4"><i
                                                        class="fa fa-envelope-o"></i></span>
                                                    <h4>6,510</h4>
                                                    <h6><i class="fa fa-circle col_1"
                                                        style="margin-right:5px; vertical-align:middle;"></i> Opened
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <div class="analytic_4r">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">REVENUE</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">Yesterday</a></li>
                                                <li><a class="dropdown-item" href="#">Last Week</a></li>
                                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="crm_3ri bg-light p-4 mt-3 m-0 row">
                                            <div class="col-md-6">
                                                <div class="crm_3ril text-center">
                                                    <h6 class="col_3">Current Month</h6>
                                                    <h3 class="mb-0">$42,025</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="crm_3ril text-center">
                                                    <h6 class="col_3">Previous Month</h6>
                                                    <h3 class="mb-0">$42,025</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="crm_3ri row">
                                            <div class="col-md-12">
                                                <canvas id="lineChart"></canvas>
                                            </div>
                                        </div>
                                        <div class="crm_3ri text-center row mt-3">
                                            <div class="col-md-12">
                                                <h6 style="margin-right:10px; margin-left:10px;" class="d-inline-block"><i
                                                    class="fa fa-circle col_2" style="margin-right:5px;"></i> Total
                                                    Revenue
                                                </h6>
                                                <h6 style="margin-right:10px; margin-left:10px;" class="d-inline-block"><i
                                                    class="fa fa-circle col_4" style="margin-right:5px;"></i> Total
                                                    Pipeline
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row crm_4 mt-4">
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="crm_4l">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">TOP PERFORMING</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive table_tow">
                                            <table
                                                class="table table-responsive table-striped table-bordered p-0 m-0 align-middle">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">User</th>
                                                        <th scope="col"> Leads</th>
                                                        <th scope="col">Deals</th>
                                                        <th scope="col">Tasks</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h6>Jeremy</h6>
                                                        </td>
                                                        <td>187</td>
                                                        <td>157</td>
                                                        <td>57</td>
                                                        <td><i class="fa fa-eye"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h6>Jeremy</h6>
                                                        </td>
                                                        <td>187</td>
                                                        <td>157</td>
                                                        <td>57</td>
                                                        <td><i class="fa fa-eye"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h6>Jeremy</h6>
                                                        </td>
                                                        <td>187</td>
                                                        <td>157</td>
                                                        <td>57</td>
                                                        <td><i class="fa fa-eye"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h6>Jeremy</h6>
                                                        </td>
                                                        <td>187</td>
                                                        <td>157</td>
                                                        <td>57</td>
                                                        <td><i class="fa fa-eye"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="crm_4m">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">RECENT LEADS</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive table_tow">
                                            <table class="table table-borderless p-0 m-0">
                                                <tr>
                                                    <td><img alt="abc" class="rounded-circle" width="40" height="40"
                                                        src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}">
                                                    </td>
                                                    <td>
                                                        <h6>Risa Pearson</h6>
                                                        <h6 class="col_3 font-weight-normal font_12">info@gmail.com</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="bg_2 font_12 text-center p-1">Cold lead</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img alt="abc" class="rounded-circle" width="40" height="40"
                                                        src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}">
                                                    </td>
                                                    <td>
                                                        <h6>Risa Pearson</h6>
                                                        <h6 class="col_3 font-weight-normal font_12">info@gmail.com</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="bg_3 font_12 text-center p-1 col_2">Cold lead</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img alt="abc" class="rounded-circle" width="40" height="40"
                                                        src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}">
                                                    </td>
                                                    <td>
                                                        <h6>Risa Pearson</h6>
                                                        <h6 class="col_3 font-weight-normal font_12">info@gmail.com</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="bg_2 font_12 text-center p-1">Cold lead</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img alt="abc" class="rounded-circle" width="40" height="40"
                                                        src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}">
                                                    </td>
                                                    <td>
                                                        <h6>Risa Pearson</h6>
                                                        <h6 class="col_3 font-weight-normal font_12">info@gmail.com</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="bg_3 font_12 text-center p-1 col_2">Cold lead</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img alt="abc" class="rounded-circle" width="40" height="40"
                                                        src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}">
                                                    </td>
                                                    <td>
                                                        <h6>Risa Pearson</h6>
                                                        <h6 class="col_3 font-weight-normal font_12">info@gmail.com</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="bg_2 font_12 text-center p-1">Cold lead</h6>
                                                    </td>
                                                </tr>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="crm_4r">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">TODO</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}"
                                            height="150" class="w-100 mb-2">
                                        <div class="form-check"><input type="checkbox" class="form-check-input todo-done"
                                            id="7" checked=""><label class="form-check-label" for="7"><s>Build an
                                            angular app</s></label>
                                        </div>
                                        <div class="form-check "><input type="checkbox" class="form-check-input todo-done"
                                            id="6"><label class="form-check-label" for="6">Create new version
                                            3.0</label>
                                        </div>
                                        <div class="form-check "><input type="checkbox" class="form-check-input todo-done"
                                            id="6"><label class="form-check-label" for="6">Create new version
                                            3.0</label>
                                        </div>
                                        <div class="form-check "><input type="checkbox" class="form-check-input todo-done"
                                            id="6"><label class="form-check-label" for="6">Create new version
                                            3.0</label>
                                        </div>
                                        <div class="form-check"><input type="checkbox" class="form-check-input todo-done"
                                            id="7" checked=""><label class="form-check-label" for="7"><s>Build an
                                            angular app</s></label>
                                        </div>
                                        <div class="form-check"><input type="checkbox" class="form-check-input todo-done"
                                            id="7" checked=""><label class="form-check-label" for="7"><s>Build an
                                            angular app</s></label>
                                        </div>
                                        <div class="form-check"><input type="checkbox" class="form-check-input todo-done"
                                            id="7" checked=""><label class="form-check-label" for="7"><s>Build an
                                            angular app</s></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row Ecommerce_1 mt-4">
                        <div class="col-lg-5 col-md-6">
                            <div class="Ecommerce_1l row">
                                <div class="col-md-6">
                                    <div class="analytic_2l1 bg-white">
                                        <h6 class="font_14">Customers </h6>
                                        <h3>36,254 </h3>
                                        <p class="col_2 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27%<br> <span
                                            class="col_3">Since last month</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="analytic_2l1 bg-white">
                                        <h6 class="font_14">Orders </h6>
                                        <h3>36,254 </h3>
                                        <p class="col_4 mb-0"><i class="fa fa-long-arrow-down"></i> 5.27%<br> <span
                                            class="col_3">Since last month</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="Ecommerce_1l mt-4 row">
                                <div class="col-md-6">
                                    <div class="analytic_2l1 bg-white">
                                        <h6 class="font_14">Revenue </h6>
                                        <h3>$6,254 </h3>
                                        <p class="col_2 mb-0"><i class="fa fa-long-arrow-up"></i> 5.27%<br> <span
                                            class="col_3">Since last month</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="analytic_2l1 bg-white">
                                        <h6 class="font_14">Growth </h6>
                                        <h3>+ 30.56% </h3>
                                        <p class="col_4 mb-0"><i class="fa fa-long-arrow-down"></i> 5.27%<br> <span
                                            class="col_3">Since last month</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="Ecommerce_1r">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">PROJECTIONS VS ACTUALS</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Sales Report</a></li>
                                                <li><a class="dropdown-item" href="#">Export Report</a></li>
                                                <li><a class="dropdown-item" href="#">Profit</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="functionChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row Ecommerce_2 mt-4">
                        <div class="col-md-8">
                            <div class="Ecommerce_2l">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">REVENUE</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Sales Report</a></li>
                                                <li><a class="dropdown-item" href="#">Export Report</a></li>
                                                <li><a class="dropdown-item" href="#">Profit</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="crm_3ri bg-light p-4 mt-3 m-0 row">
                                            <div class="col-md-6">
                                                <div class="crm_3ril text-center">
                                                    <h6 class="col_3">Current Month</h6>
                                                    <h3 class="mb-0">$42,025</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="crm_3ril text-center">
                                                    <h6 class="col_3">Previous Month</h6>
                                                    <h3 class="mb-0">$42,025</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Ecommerce_2li mt-3 row">
                                            <div class="col-md-12">
                                                <h6>Today's Earning: $2,562.30</h6>
                                                <p>Etiam ultricies nisi vel augue. Curabitur ullamcorper <br> ultricies
                                                    nisi. Nam eget dui. Etiam rhoncus...
                                                </p>
                                                <h6><a class="buttton" href="#">View Statement <i
                                                    class="fa fa-long-arrow-right"></i></a></h6>
                                            </div>
                                        </div>
                                        <div class="crm_3ri mt-2 row">
                                            <div class="col-md-12">
                                                <canvas id="linearChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="Ecommerce_2r">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">REVENUE BY LOCATION</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Sales Report</a></li>
                                                <li><a class="dropdown-item" href="#">Export Report</a></li>
                                                <li><a class="dropdown-item" href="#">Profit</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="Ecommerce_2ri row mt-3"></div>
                                        <div class="col-md-12">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.53925916665!2d-80.29949920266738!3d25.782390733064336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sin!4v1530774403788"
                                                height="250" style="border:0; width:100%;" allowfullscreen=""></iframe>
                                            <h6 class="mt-2">New York <span class="pull-right">72k</span></h6>
                                            <div class="progress" style="height:5px;">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 72%; background:#727cf5;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h6 class="mt-3">San Francisco <span class="pull-right">52k</span></h6>
                                            <div class="progress" style="height:5px;">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 52%; background:#727cf5;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h6 class="mt-3">Sydney <span class="pull-right">42k</span></h6>
                                            <div class="progress" style="height:5px;">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 42%; background:#727cf5;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h6 class="mt-3">Singapore <span class="pull-right">92k</span></h6>
                                            <div class="progress" style="height:5px;">
                                                <div class="progress-bar" role="progressbar"
                                                    style="width: 92%; background:#727cf5;" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row Ecommerce_3 mt-4">
                        <div class="col-lg-12 col-xl-6 col-md-12">
                            <div class="Ecommerce_3l">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:3px;" class="d-inline-block mb-0">TOP SELLING PRODUCTS</h6>
                                        <h6 style="padding-top:3px;" class="d-inline-block mb-0 pull-right"><a class="col_1"
                                            href="#">Export <i style="padding-left:5px;" class="fa fa-download"></i></a>
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive table_tow">
                                            <table class="table table-hover  p-0 m-0 align-middle">
                                                <tbody>
                                                    <tr>
                                                        <td><span class="bold">ASOS Ridley High Waist</span> <br>07 April
                                                            2018
                                                        </td>
                                                        <td>$79.49 Price</td>
                                                        <td>82 Quantity</td>
                                                        <td><span class="bold">$6,518.18 Amount</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="bold">ASOS Ridley High Waist</span> <br>07 April
                                                            2018
                                                        </td>
                                                        <td>$79.49 Price</td>
                                                        <td>82 Quantity</td>
                                                        <td><span class="bold">$6,518.18 Amount</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="bold">ASOS Ridley High Waist</span> <br>07 April
                                                            2018
                                                        </td>
                                                        <td>$79.49 Price</td>
                                                        <td>82 Quantity</td>
                                                        <td><span class="bold">$6,518.18 Amount</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="bold">ASOS Ridley High Waist</span> <br>07 April
                                                            2018
                                                        </td>
                                                        <td>$79.49 Price</td>
                                                        <td>82 Quantity</td>
                                                        <td><span class="bold">$6,518.18 Amount</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="bold">ASOS Ridley High Waist</span> <br>07 April
                                                            2018
                                                        </td>
                                                        <td>$79.49 Price</td>
                                                        <td>82 Quantity</td>
                                                        <td><span class="bold">$6,518.18 Amount</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3 col-md-6">
                            <div class="Ecommerce_3m">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">TOTAL SALES</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <img src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}"
                                            height="220" class="w-100 mb-2 rounded-circle">
                                        <div class="Ecommerce_3mi">
                                            <h6
                                                style="border-bottom:1px solid #ddd; padding-bottom:10px; margin-bottom:10px;">
                                                <i class="fa fa-circle col_2" style="margin-right:5px;"></i> Direct <span
                                                    class="pull-right">$300.56</span>
                                            </h6>
                                            <h6 class="mb-0" style="border-bottom:1px solid #ddd; padding-bottom:10px;"> <i
                                                class="fa fa-circle col_4" style="margin-right:5px;"></i> Affilliate
                                                <span class="pull-right">$300.56</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3 col-md-6">
                            <div class="Ecommerce_3r">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">RECENT ACTIVITY</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="Ecommerce_3ri">
                                            <h6><i style="padding-right:5px;" class="fa fa-download col_1"></i> <a
                                                class="col_1" href="#">You sold an item</a></h6>
                                            <p class="font_14">Paul Burgess just purchased “Lorem - Admin Dashboard”!
                                                5 minutes ago
                                            </p>
                                        </div>
                                        <div class="Ecommerce_3ri">
                                            <h6><i style="padding-right:5px;" class="fa fa-download col_1"></i> <a
                                                class="col_1" href="#">You sold an item</a></h6>
                                            <p class="font_14">Paul Burgess just purchased “Lorem - Admin Dashboard”!
                                                5 minutes ago
                                            </p>
                                        </div>
                                        <div class="Ecommerce_3ri">
                                            <h6><i style="padding-right:5px;" class="fa fa-download col_1"></i> <a
                                                class="col_1" href="#">You sold an item</a></h6>
                                            <p class="font_14">Paul Burgess just purchased “Lorem - Admin Dashboard”!
                                                5 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row crm_1 mt-4">
                        <div class="col-md-3">
                            <div class="analytic_1l">
                                <h5 class="mb-0">Projects</h5>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="crm_1r pull-right">
                            </div>
                        </div>
                    </div>
                    <div class="row project_1 mt-3">
                        <div class="col-md-3">
                            <div class="project_1i text-center bg-white">
                                <span style="font-size:26px;" class="d-inline-block col_3"><i
                                    class="fa fa-briefcase"></i></span>
                                <h4>29</h4>
                                <h6 class="col_3 mb-0">Total Projects</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="project_1i text-center bg-white">
                                <span style="font-size:26px;" class="d-inline-block col_3"><i
                                    class="fa fa-list-alt"></i></span>
                                <h4>299</h4>
                                <h6 class="col_3 mb-0">Total Tasks</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="project_1i text-center bg-white">
                                <span style="font-size:26px;" class="d-inline-block col_3"><i
                                    class="fa fa-users"></i></span>
                                <h4>29</h4>
                                <h6 class="col_3 mb-0">Members</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="project_1i text-center bg-white">
                                <span style="font-size:26px;" class="d-inline-block col_3"><i
                                    class="fa fa-bar-chart"></i></span>
                                <h4>93% <i class="fa fa-long-arrow-up col_2"></i></h4>
                                <h6 class="col_3 mb-0">Productivity</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row project_2 mt-4">
                        <div class="col-lg-4 col-md-12">
                            <div class="project_2l">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">PROJECT STATUS</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="doughnutChart"></canvas>
                                        <div class="analytic_4li mt-2 row">
                                            <div class="col-md-4">
                                                <div class="analytic_4lil text-center">
                                                    <span class="mb-2 d-inline-block col_2"><i
                                                        class="fa fa-long-arrow-up"></i></span>
                                                    <h4>60%</h4>
                                                    <h6 class="font_14 col_3 mb-0"> Completed</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="analytic_4lil text-center">
                                                    <span class="mb-2 d-inline-block col_1"><i
                                                        class="fa fa-long-arrow-up"></i></span>
                                                    <h4>40%</h4>
                                                    <h6 class="font_14 col_3 mb-0"> In-progress</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="analytic_4lil text-center">
                                                    <span class="mb-2 d-inline-block col_4"><i
                                                        class="fa fa-long-arrow-down"></i></span>
                                                    <h4>10%</h4>
                                                    <h6 class="font_14 col_3 mb-0"> Behind</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="project_2r">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">TASKS</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body table-responsive table_tow">
                                        <p>107 Tasks completed out of 195</p>
                                        <table class="table table-responsive table-hover  p-0 m-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h6 class="font_12">Coffee detail page - Main Page</h6>
                                                        <h6 class="font_12 col_3 mb-0">Due in 3 days</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Status</h6>
                                                        <h6 class="bg_2 font_12 p-1 mb-0">Progress</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Assigned to</h6>
                                                        <h6 class="font_12 mb-0">Logan R. Cohn</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Total time spend</h6>
                                                        <h6 class="font_12 mb-0">3h 20min</h6>
                                                    </td>
                                                    <td>
                                                        <h6 data-bs-toggle="tooltip" data-bs-placement="left"
                                                            data-bs-original-title="Edit" class="d-inline-block mb-0"><a
                                                            href="#"><i style="vertical-align:middle; margin-right:5px;"
                                                            class="fa fa-edit col_3"></i></a></h6>
                                                        <h6 data-bs-toggle="tooltip" data-bs-placement="right"
                                                            data-bs-original-title="Delete" class="d-inline-block mb-0"><a
                                                            href="#"><i class="fa fa-trash col_3"></i></a></h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font_12">Coffee detail page - Main Page</h6>
                                                        <h6 class="font_12 col_3 mb-0">Due in 3 days</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Status</h6>
                                                        <h6 class="bg_3 font_12 p-1 mb-0">Progress</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Assigned to</h6>
                                                        <h6 class="font_12 mb-0">Logan R. Cohn</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Total time spend</h6>
                                                        <h6 class="font_12 mb-0">3h 20min</h6>
                                                    </td>
                                                    <td>
                                                        <h6 data-bs-toggle="tooltip" data-bs-placement="left"
                                                            data-bs-original-title="Edit" class="d-inline-block mb-0"><a
                                                            href="#"><i style="vertical-align:middle; margin-right:5px;"
                                                            class="fa fa-edit col_3"></i></a></h6>
                                                        <h6 data-bs-toggle="tooltip" data-bs-placement="right"
                                                            data-bs-original-title="Delete" class="d-inline-block mb-0"><a
                                                            href="#"><i class="fa fa-trash col_3"></i></a></h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font_12">Coffee detail page - Main Page</h6>
                                                        <h6 class="font_12 col_3 mb-0">Due in 3 days</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Status</h6>
                                                        <h6 class="bg_2 font_12 p-1 mb-0">Progress</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Assigned to</h6>
                                                        <h6 class="font_12 mb-0">Logan R. Cohn</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Total time spend</h6>
                                                        <h6 class="font_12 mb-0">3h 20min</h6>
                                                    </td>
                                                    <td>
                                                        <h6 data-bs-toggle="tooltip" data-bs-placement="left"
                                                            data-bs-original-title="Edit" class="d-inline-block mb-0"><a
                                                            href="#"><i style="vertical-align:middle; margin-right:5px;"
                                                            class="fa fa-edit col_3"></i></a></h6>
                                                        <h6 data-bs-toggle="tooltip" data-bs-placement="right"
                                                            data-bs-original-title="Delete" class="d-inline-block mb-0"><a
                                                            href="#"><i class="fa fa-trash col_3"></i></a></h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="font_12">Coffee detail page - Main Page</h6>
                                                        <h6 class="font_12 col_3 mb-0">Due in 3 days</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Status</h6>
                                                        <h6 class="bg_3 font_12 p-1 mb-0">Progress</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Assigned to</h6>
                                                        <h6 class="font_12 mb-0">Logan R. Cohn</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="col_3 font_12">Total time spend</h6>
                                                        <h6 class="font_12 mb-0">3h 20min</h6>
                                                    </td>
                                                    <td>
                                                        <h6 data-bs-toggle="tooltip" data-bs-placement="left"
                                                            data-bs-original-title="Edit" class="d-inline-block mb-0"><a
                                                            href="#"><i style="vertical-align:middle; margin-right:5px;"
                                                            class="fa fa-edit col_3"></i></a></h6>
                                                        <h6 data-bs-toggle="tooltip" data-bs-placement="right"
                                                            data-bs-original-title="Delete" class="d-inline-block mb-0"><a
                                                            href="#"><i class="fa fa-trash col_3"></i></a></h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row project_3 mt-4">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6 style="padding-top:2px;" class="d-inline-block mb-0">TASKS OVERVIEW</h6>
                                    <div class="dropdown d-inline-block pull-right">
                                        <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Refresh Report</a></li>
                                            <li><a class="dropdown-item" href="#">Export Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="areaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row project_4 mt-4">
                        <div class="col-lg-5 col-md-12">
                            <div class="project_4l">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">RECENT LEADS</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body table_tow">
                                        <table class="table table-responsive table-hover  p-0 m-0">
                                            <tbody>
                                                <tr>
                                                    <td><img alt="abc" class="rounded-circle" width="40" height="40"
                                                        src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}">
                                                    </td>
                                                    <td>
                                                        <h6 class="font-13">Risa Pearson <span
                                                            class="pull-right font-13 col_3">18 Jan 2019</span></h6>
                                                        <p class="col_3 font-13">Completed "Design new idea"...</p>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-13 col_3">Project</h6>
                                                        <h6 class="font-13">Lorem Mockup</h6>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown d-inline-block pull-right">
                                                            <button class="border-0 bgn" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                            <i class="fa fa-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu drop_card"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img alt="abc" class="rounded-circle" width="40" height="40"
                                                        src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}">
                                                    </td>
                                                    <td>
                                                        <h6 class="font-13">Risa Pearson <span
                                                            class="pull-right font-13 col_3">18 Jan 2019</span></h6>
                                                        <p class="col_3 font-13">Completed "Design new idea"...</p>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-13 col_3">Project</h6>
                                                        <h6 class="font-13">Lorem Mockup</h6>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown d-inline-block pull-right">
                                                            <button class="border-0 bgn" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                            <i class="fa fa-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu drop_card"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img alt="abc" class="rounded-circle" width="40" height="40"
                                                        src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}">
                                                    </td>
                                                    <td>
                                                        <h6 class="font-13">Risa Pearson <span
                                                            class="pull-right font-13 col_3">18 Jan 2019</span></h6>
                                                        <p class="col_3 font-13">Completed "Design new idea"...</p>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-13 col_3">Project</h6>
                                                        <h6 class="font-13">Lorem Mockup</h6>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown d-inline-block pull-right">
                                                            <button class="border-0 bgn" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                            <i class="fa fa-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu drop_card"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img alt="abc" class="rounded-circle" width="40" height="40"
                                                        src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}">
                                                    </td>
                                                    <td>
                                                        <h6 class="font-13">Risa Pearson <span
                                                            class="pull-right font-13 col_3">18 Jan 2019</span></h6>
                                                        <p class="col_3 font-13">Completed "Design new idea"...</p>
                                                    </td>
                                                    <td>
                                                        <h6 class="font-13 col_3">Project</h6>
                                                        <h6 class="font-13">Lorem Mockup</h6>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown d-inline-block pull-right">
                                                            <button class="border-0 bgn" type="button"
                                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                            <i class="fa fa-ellipsis-h"></i>
                                                            </button>
                                                            <ul class="dropdown-menu drop_card"
                                                                aria-labelledby="dropdownMenuButton1">
                                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="project_4r">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">YOUR CALENDAR</h6>
                                        <div class="dropdown d-inline-block pull-right">
                                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="project_4ri row">
                                            <div class="col-md-7">
                                                <div class="project_4ril">
                                                    <img src="{{ asset('asset/upload/aedemodir/img/bac.jpg')}}"
                                                        height="350" class="w-100">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="project_4rir">
                                                    <h6 class="font_14 col_3"><i style="margin-right:5px;"
                                                        class="fa fa-calendar"></i> 7:30 AM - 10:00 AM</h6>
                                                    <h6>Meeting with BD Team</h6>
                                                    <h6 class="font_14 col_3 mt-4"><i style="margin-right:5px;"
                                                        class="fa fa-calendar"></i> 7:30 AM - 10:00 AM</h6>
                                                    <h6>Meeting with BD Team</h6>
                                                    <h6 class="font_14 col_3 mt-4"><i style="margin-right:5px;"
                                                        class="fa fa-calendar"></i> 7:30 AM - 10:00 AM</h6>
                                                    <h6>Meeting with BD Team</h6>
                                                    <h6 class="font_14 col_3 mt-4"><i style="margin-right:5px;"
                                                        class="fa fa-calendar"></i> 7:30 AM - 10:00 AM</h6>
                                                    <h6>Meeting with BD Team</h6>
                                                    <h6 class="font_14 col_3 mt-4"><i style="margin-right:5px;"
                                                        class="fa fa-calendar"></i> 7:30 AM - 10:00 AM</h6>
                                                    <h6>Meeting with BD Team</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row footer mt-4">
                        <div class="col-md-8">
                            <div class="footer_1l">
                                <p class="mb-0 col_3">© 2013 Your Website Name. All Rights Reserved | Design by <a
                                    class="col_1 font-weight-bold"
                                    href="http://www.templateonweb.com/">TemplateOnWeb</a></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer_1r" style="text-align:right;">
                                <ul>
                                    <li class="d-inline font_14"><a class="col_3" href="#">About </a></li>
                                    <li class="d-inline font_14"><a class="col_3" href="#">Support </a></li>
                                    <li class="d-inline font_14"><a class="col_3" href="#">Contact Us </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="{{ asset('asset/upload/aedemodir/bootstrap5/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('asset/upload/aedemodir/950a4152c2b4aa3ad78bdd6b366cc179/js/global.js')}}"></script>
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
        <script>
            //================ Line chart With Multiple Lines ========
            
            var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];
            
            new Chart("multipleLineChart", {
                labels: 'Multiple Line Chart',
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                        label: 'India',
                        data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                        borderColor: "red",
                        fill: false
                    }, {
                        label: 'US',
                        data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                        borderColor: "green",
                        fill: false
                    }, {
                        label: 'China',
                        data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                        borderColor: "blue",
                        fill: false
                    }]
                },
                options: {
                    legend: {
                        display: false
                    }
                }
            });
            
            
            
            
            //============== Bar Chart Single Dataset ============
            
            var xValuesBarSingle = ["Italy", "France", "Spain", "USA", "Argentina"];
            var yValuesBarSingle = [55, 49, 44, 24, 15];
            var barColors = ["red", "green", "blue", "orange", "brown"];
            
            new Chart("barSingleChart", {
                type: "bar",
                data: {
                    labels: xValuesBarSingle,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValuesBarSingle
                    }]
                },
                options: {}
            });
            
            
            //================ Line chart With SINGLE Line ========
            
            const labelsLine = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July'
            ];
            
            const dataLine = {
                labels: labelsLine,
                datasets: [{
                    label: 'Products',
                    backgroundColor: "rgba(0,0,0,1.0)",
                    borderColor: "rgba(0,0,0,0.1)",
                    data: [0, 10, 5, 2, 20, 30, 45],
            
                }]
            };
            
            const config = {
                type: 'line',
                data: dataLine,
                options: {}
            };
            
            const lineChart = new Chart(
                document.getElementById('lineChart'),
                config
            );
            
            //============== Pie Chart Single Dataset ============
            
            var xValuesPieChart = ["Crome", "Firefox", "Safari", "Android", "Internet Explorer"];
            var yValuesPieChart = [55, 49, 44, 24, 15];
            var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
            ];
            
            new Chart("pieChart", {
                type: "pie",
                data: {
                    labels: xValuesPieChart,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValuesPieChart
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "Production 2022"
                    }
                }
            });
            
            
            //============== Bar Chart Multiple Datasets ============
            const dataBar = [{
                x: 'Jan',
                net: 100,
                cogs: 50,
                gm: 50
            }, {
                x: 'Feb',
                net: 120,
                cogs: 55,
                gm: 75
            }];
            const configBar = {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb'],
                    datasets: [{
                        label: 'Net sales',
                        data: dataBar,
                        parsing: {
                            yAxisKey: 'net'
                        },
                        backgroundColor: '#232e3c',
                        borderColor: '#32455c',
                    }, {
                        label: 'Cost of goods sold',
                        data: dataBar,
                        parsing: {
                            yAxisKey: 'cogs'
                        }
                    }, {
                        label: 'Gross margin',
                        data: dataBar,
                        parsing: {
                            yAxisKey: 'gm'
                        }
                    }]
                },
            
            };
            
            const barChart = new Chart(
                document.getElementById('barChart'),
                configBar
            );
            
            
            //============== Area Chart ============
            const configArea = {
                type: 'line',
                labels: 'Area Chart',
                data: {
                    labels: ["Tokyo", "Mumbai", "Mexico City", "Shanghai", "Sao Paulo", "New York", "Karachi",
                        "Buenos Aires", "Delhi", "Moscow"
                    ],
                    datasets: [{
                            label: 'Series 1', // Name the series
                            data: [500, 50, 2424, 14040, 14141, 4111, 4544, 47, 5555,
                                6811
                            ], // Specify the data values array
                            fill: true,
                            borderColor: '#2196f3', // Add custom color border (Line)
                            backgroundColor: '#2196f3', // Add custom color background (Points and Fill)
                            borderWidth: 1 // Specify bar border width
                        },
                        {
                            label: 'Series 2', // Name the series
                            data: [1288, 88942, 44545, 7588, 99, 242, 1417, 5504, 75,
                                457
                            ], // Specify the data values array
                            fill: true,
                            borderColor: '#4CAF50', // Add custom color border (Line)
                            backgroundColor: '#4CAF50', // Add custom color background (Points and Fill)
                            borderWidth: 1 // Specify bar border width
                        }
                    ]
                },
                options: {
                    responsive: true, // Instruct chart js to respond nicely.
                    maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
                }
            };
            
            
            const areaChart = new Chart(
                document.getElementById('areaChart'),
                configArea
            );
            
            
            // ===================== Function Chart ====================
            
            var xValuesFunction = [];
            var yValuesFunction = [];
            generateDataFunctionChart("Math.sin(x)", 0, 10, 0.5);
            
            new Chart("functionChart", {
                type: "line",
                data: {
                    labels: xValuesFunction,
                    datasets: [{
                        fill: false,
                        pointRadius: 2,
                        borderColor: "rgba(0,0,255,0.5)",
                        data: yValuesFunction
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: "y = x * 2 + 7",
                        fontSize: 16
                    }
                }
            });
            
            function generateDataFunctionChart(value, i1, i2, step = 1) {
                for (let x = i1; x <= i2; x += step) {
                    yValuesFunction.push(eval(value));
                    xValuesFunction.push(x);
                }
            }
            
            
            // ============== Linear Graphs ==============
            
            var xValueslinear = [];
            var yValueslinear = [];
            generateData("x * 2 + 7", 0, 10, 0.5);
            
            new Chart("linearChart", {
                type: "line",
                data: {
                    labels: xValueslinear,
                    datasets: [{
                        label: 'Linear Chart',
                        fill: false,
                        pointRadius: 3,
                        borderColor: "rgba(255,0,0,0.5)",
                        data: yValueslinear
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: "y = x * 2 + 7",
                        fontSize: 16
                    }
                }
            });
            
            function generateData(value, i1, i2, step = 1) {
                for (let x = i1; x <= i2; x += step) {
                    yValueslinear.push(eval(value));
                    xValueslinear.push(x);
                }
            }
            
            
            //============== Doughnut Chart Single Dataset ============
            
            var xValuesDoughnut = ["Italy", "France", "Spain", "USA", "Argentina"];
            var yValuesDoughnut = [55, 49, 44, 24, 15];
            var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
            ];
            
            new Chart("doughnutChart", {
                type: "doughnut",
                data: {
                    labels: xValuesDoughnut,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValuesDoughnut
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "Production 2022"
                    }
                }
            });
        </script>
    </body>
</html>