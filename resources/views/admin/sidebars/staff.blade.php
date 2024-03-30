<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
    style="overflow-y: auto; max-height:inherit;">
    <div class="position-sticky">

        <ul class="nav flex-column mb-2 list-unstyled ps-0">
            <li class="nav-item">
                <a href="/staff/dashboard"
                    class="btn btn-toggle align-items-center rounded w-100 tag_m  no_drop active_tab"><i
                        class="fa fa-dashboard icon-before"></i><span class="btn">Dashboard</span></a>

            </li>
            <li class="nav-item">
                <a href="/staff/profile"
                    class="btn btn-toggle align-items-center rounded w-100 tag_m  no_drop"><i
                        class="fa fa-dashboard icon-before"></i><span class="btn">Profile</span></a>

            </li>
            <li class="nav-item">

                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed  w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false"><i
                        class="fa fa-shopping-cart icon-before"></i><span class="btn">Treatment</span><i
                        class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="orders-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/staff/stock"
                                class="link-dark rounded w-100"><span><i
                                        style="font-size:8px; vertical-align:middle; margin-right:10px;"
                                        class="fa fa-circle-o"></i> Stock</span></a></li>
                        <li><a href="/staff/treatment"
                                class="link-dark rounded w-100"><span><i
                                        style="font-size:8px; vertical-align:middle; margin-right:10px;"
                                        class="fa fa-circle-o"></i> Treatment</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">

                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#Authent-collapse" aria-expanded="false"><i
                        class="fa fa-lock icon-before"></i><span class="btn">Patients</span><i
                        class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="Authent-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a   href="/staff/todays_patients"
                                class="link-dark rounded w-100"><span><i
                                        style="font-size:8px; vertical-align:middle; margin-right:10px;"
                                        class="fa fa-circle-o"></i> Todays' Patients</span></a>
                                </li>
                        <li><a  href="/staff/all_patient"
                                class="link-dark rounded w-100"><span><i
                                        style="font-size:8px; vertical-align:middle; margin-right:10px;"
                                        class="fa fa-circle-o"></i> All Patients</span></a>
                                </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="/staff/results"
                    class="btn btn-toggle align-items-center rounded w-100 tag_m  no_drop"><i
                        class="fa fa-comment-o icon-before"></i><span class="btn">Results</span></a>
            </li>

            <li class="nav-item">
                <a href="/staff/prescription"
                    class="btn btn-toggle align-items-center rounded w-100 tag_m  no_drop"><i
                        class="fa fa-comment-o icon-before"></i><span class="btn">Prescription</span></a>
            </li>
            <li class="nav-item">
                <a href="/staff/change_password"
                    class="btn btn-toggle align-items-center rounded w-100 tag_m  no_drop"><i
                        class="fa fa-lock icon-before"></i><span class="btn">Change Password</span></a>
            </li>
        </ul>


        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <svg xmlns="#" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-plus-circle" aria-hidden="true">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="16"></line>
                    <line x1="8" y1="12" x2="16" y2="12"></line>
                </svg>
            </a>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-muted" href="#">
                    <svg xmlns="#" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-layers" aria-hidden="true">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                    </svg>
                    Integrations
                </a>
            </li>
        </ul>

    </div>
</nav>