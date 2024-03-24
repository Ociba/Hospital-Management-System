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