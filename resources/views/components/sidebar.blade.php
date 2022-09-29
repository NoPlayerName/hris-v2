<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ url('assets/images/logo-tm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ url('assets/images/logo-trans7.png') }}" alt="" height="50">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ url('assets/images/logo-tm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ url('assets/images/logo-trans7.png') }}" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">HRIS Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.html">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="human-capital.html">
                        <i class="ri-apps-2-line"></i> <span data-key="t-apps">Human Capital</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="recruitment.html">
                        <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Recruitment</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="clearance.html">
                        <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Clearance</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="training.html">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">Training</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="mpp.html">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">MPP</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="administrator.html">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Administrator</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="presence.html">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Presence</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="cuti-online.html">
                        <i class="ri-honour-line"></i> <span data-key="t-widgets">Cuti Online</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="request-form.html">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Request Form</span>
                    </a>
                </li>

                <!-- <li class="nav-item">
                            <a class="nav-link menu-link" href="ski-pa.html">
                                <i class="ri-layout-grid-line"></i> <span data-key="t-tables">SKI & PA</span>
                            </a>
                        </li> -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#ski-pa" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span data-key="t-tables">SKI & PA</span>
                    </a>
                    <div class="collapse show menu-dropdown" id="ski-pa">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('pms.ski.index') }}" class="nav-link" data-key="t-ski">Sasaran
                                    Kerja Individu</a>
                            </li>
                            <li class="nav-item">
                                <a href="ski-tracking.html" class="nav-link" data-key="t-ski-tracking">SKI
                                    Tracking</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('pms.pa.index') }}" class="nav-link" data-key="t-pa">Performance
                                    Appraisal</a>
                            </li>
                            <li class="nav-item">
                                <a href="pa-tracking.html" class="nav-link" data-key="t-pa-tracking">PA Tracking</a>
                            </li>
                            <li class="nav-item">
                                <a href="rekap-pa.html" class="nav-link" data-key="t-rekap-pa">Rekap
                                    PA</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('pms.referensi-pa.index') }}" class="nav-link"
                                    data-key="t-referensi-pa">Referensi PA</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="reimbursement.html">
                        <i class="ri-pie-chart-line"></i> <span data-key="t-charts">Reimbursement</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
