<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
    style="overflow-y: auto; max-height:inherit;">
    <div class="position-sticky">
        <ul class="nav flex-column mb-2 list-unstyled ps-0">
            <li class="nav-item">
                <a href="/admin/dashboard"
                    class="btn btn-toggle align-items-center rounded w-100 tag_m  no_drop active_tab"><i
                    class="fa fa-dashboard icon-before"></i><span class="btn">Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#Authent-collapse" aria-expanded="false"><i
                    class="fa fa-lock icon-before"></i><span class="btn">Patients</span><i
                    class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="Authent-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a  href="/patient/booking"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Booking</span></a></li>
                        <li><a  href="/patient/reception"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Reception</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#pages-collapse" aria-expanded="false"><i
                    class="fa fa-copy icon-before"></i><span class="btn">Appointments</span><i
                    class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="pages-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/appointment/pending"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Pending</span></a></li>
                        <li><a 
                            href="/appointment/cancelled"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Cancelled</span></a></li>
                        <li><a 
                            href="/appointment/successful"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Successful</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#consultation-room" aria-expanded="false"><i
                    class="fa fa-lock icon-before"></i><span class="btn">Consultation Room</span><i
                    class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="consultation-room" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a 
                            href="/consultationroom/general"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> General Doctor</span></a></li>
                        <li><a 
                            href="/consultationroom/special"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Special Doctor</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#base-collapse" aria-expanded="false"><i
                    class="fa fa-diamond icon-before"></i><span class="btn">Laboratory</span><i
                    class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="base-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/laboratory/stock"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Stock</span></a></li>
                        <li><a href="/laboratory/stock_usage"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Usage</span></a></li>
                        <li><a href="/laboratory/results"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Results </span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#treatment" aria-expanded="false"><i
                    class="fa fa-diamond icon-before"></i><span class="btn">Treatment</span><i
                    class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="treatment" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/treatment/admitted"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> In Patient</span></a></li>
                        <li><a href="/treatment/outpatient"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Out Patient</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#theatre" aria-expanded="false"><i
                    class="fa fa-diamond icon-before"></i><span class="btn">Theatre</span><i
                    class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="theatre" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/theatre/minor"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Minor</span></a></li>
                        <li><a href="/theatre/major"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Complicated</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#ward" aria-expanded="false"><i
                    class="fa fa-diamond icon-before"></i><span class="btn">Ward</span><i
                    class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="ward" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/ward/admitted"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> On treatment</span></a></li>
                        <li><a href="/ward/discharged"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Discharged</span></a>
                        </li>
                        <li><a href="/ward/referred"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Referred</span></a>
                        </li>
                        <li><a href="/ward/died"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Died</span></a>
                        </li>
                        <li><a href="/ward/escaped"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Escaped</span></a>
                        </li>
                        <li><a href="/ward/taken"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Taken</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed  w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#accounts" aria-expanded="false"><i
                    class="fa fa-shopping-cart icon-before"></i><span class="btn">Accounts</span><i
                    class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="accounts" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/accounts/stock"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Stock</span></a></li>
                        <li><a href="/accounts/payment"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Payments</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#pharmacy" aria-expanded="false"><i
                    class="fa fa-diamond icon-before"></i><span class="btn">Pharmacy</span><i
                    class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="pharmacy" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/drugs/stock"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Stock</span></a>
                        </li>
                        <li><a href="/drugs/nurse"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Nurse</span></a>
                        </li>
                        <li><a href="/drugs/patient"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Patient</span></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);"
                    class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m"
                    data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false"><i
                    class="fa fa-briefcase icon-before"></i><span class="btn">Staff</span><i
                    class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="account-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/staff/"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Staff</span></a></li>
                        <li><a href="/staff/support_staff"
                            class="link-dark rounded w-100"><span><i
                            style="font-size:8px; vertical-align:middle; margin-right:10px;"
                            class="fa fa-circle-o"></i> Support Staff</span></a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="/mortuary/"
                    class="btn btn-toggle align-items-center rounded w-100 tag_m  no_drop"><i
                        class="fa fa-dashboard icon-before"></i><span class="btn">Mortuary</span></a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);" class="btn btn-toggle align-items-center rounded collapsed w-100 tag_m" data-bs-toggle="collapse" data-bs-target="#Forms-collapse" aria-expanded="false"><i class="fa fa-file icon-before"></i><span class="btn">Set up</span><i class="fa fa-chevron-right"></i></a>
                <div class="collapse" id="Forms-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/setup/user_type" class="link-dark rounded w-100"><span><i style="font-size:8px; vertical-align:middle; margin-right:10px;" class="fa fa-circle-o"></i> User Type</span></a></li>
                        <li><a href="/setup/department" class="link-dark rounded w-100"><span><i style="font-size:8px; vertical-align:middle; margin-right:10px;" class="fa fa-circle-o"></i> Department</span></a></li>
                        <li><a href="/setup/service" class="link-dark rounded w-100"><span><i style="font-size:8px; vertical-align:middle; margin-right:10px;" class="fa fa-circle-o"></i> Service</span></a></li>
                        <li><a href="/setup/change_password" class="link-dark rounded w-100"><span><i style="font-size:8px; vertical-align:middle; margin-right:10px;" class="fa fa-circle-o"></i> Change Password</span></a></li>
                    </ul>
                </div>
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