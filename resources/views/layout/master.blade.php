<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Gestão de Células | Igreja Smart</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Gestão de Células para Igrejas" name="description" />
        <meta content="Smart Company Tecnologia" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        {{ HTML::style("assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"); }}
        {{ HTML::style("assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"); }}

        <!-- Responsive datatable examples -->
        {{ HTML::style("assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"); }}  

        {{ HTML::style("assets/libs/select2/css/select2.min.css"); }}  
        <!-- Bootstrap Css -->
        {{ HTML::style("assets/css/bootstrap.min.css"); }}
        <!-- Icons Css -->
        {{ HTML::style("assets/css/icons.min.css"); }}
        <!-- App Css-->
        {{ HTML::style("assets/css/app.min.css"); }}
        
        {{ HTML::style("assets/css/app.css"); }}

    </head>

    <body data-sidebar="dark">

        <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index-2.html" class="logo logo-dark">
                                <span class="logo-sm">
                                </span>
                                <span class="logo-lg">
                                </span>
                            </a>

                            <a href="index-2.html" class="logo logo-light">
                                <span class="logo-sm">
                                </span>
                                <span class="logo-lg">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                 aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/avatar.png')}}"
                                     alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Session::get('nome')}} - {{Session::get('hierarquia')}}</span>

                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Perfil</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="/"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>


                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">


                            <li>
                                <a href="/relatorio/dashboard" class="waves-effect">
                                    <i class="bx bx-bar-chart-alt"></i><span class="badge rounded-pill bg-info float-end">04</span>
                                    <span key="t-dashboards">Dashboard</span>
                                </a>
                            </li>


                                <li>
                                    <a href="/rede/index" class="waves-effect">
                                        <i class="bx bx-globe"></i>
                                        <span key="t-dashboards">Redes</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="/celula/index" class="waves-effect">
                                        <i class="bx bx-share-alt"></i>
                                        <span key="t-dashboards">Células</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="/pessoa/index" class="waves-effect">
                                        <i class="bx bxs-user-detail"></i>
                                        <span key="t-dashboards">Participantes</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="/pessoa/membros" class="waves-effect">
                                        <i class="bx bxs-user-detail"></i>
                                        <span key="t-dashboards">Não Participantes</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="/material/index" class="waves-effect">
                                        <i class="bx bx-book"></i>
                                        <span key="t-dashboards">Material</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="/relatorio/index" class="waves-effect">
                                        <i class="bx bx-pencil"></i>
                                        <span key="t-dashboards">Relatórios</span>
                                    </a>
                                </li>


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                 @yield('listagem')



                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Igreja Smart.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Smart Company Tecnologia
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">

                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        {{ HTML::script("assets/libs/jquery/jquery.min.js"); }}
        {{ HTML::script("assets/libs/select2/js/select2.min.js"); }}
        {{ HTML::script("assets/libs/metismenu/metisMenu.min.js"); }}
        <!-- Required datatable js -->
        {{ HTML::script("assets/libs/datatables.net/js/jquery.dataTables.min.js"); }}
        {{ HTML::script("assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"); }}
        <!-- Buttons examples -->
        {{ HTML::script("assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"); }}
        {{ HTML::script("assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"); }}
        {{ HTML::script("assets/libs/jszip/jszip.min.js"); }}
        {{ HTML::script("assets/libs/pdfmake/build/pdfmake.min.js"); }}
        {{ HTML::script("assets/libs/pdfmake/build/vfs_fonts.js"); }}
        {{ HTML::script("assets/libs/datatables.net-buttons/js/buttons.html5.min.js"); }}
        {{ HTML::script("assets/libs/datatables.net-buttons/js/buttons.print.min.js"); }}
        {{ HTML::script("assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"); }}
        <!-- Responsive examples -->
        {{ HTML::script("assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"); }}
        {{ HTML::script("assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"); }}
        <!-- Datatable init js -->
        {{ HTML::script("assets/js/pages/datatables.init.js"); }}    
        {{ HTML::script("assets/libs/bootstrap/js/bootstrap.bundle.min.js"); }}
        {{ HTML::script("assets/libs/metismenu/metisMenu.min.js"); }}
        {{ HTML::script("assets/libs/simplebar/simplebar.min.js"); }}
        {{ HTML::script("assets/libs/node-waves/waves.min.js"); }}
        {{ HTML::script("assets/libs/parsleyjs/parsley.min.js"); }}
        {{ HTML::script("assets/js/pages/form-validation.init.js"); }}
        {{ HTML::script("assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"); }}

        <!-- form advanced init -->
        {{ HTML::script("assets/js/pages/form-advanced.init.js"); }}
        <!-- apexcharts -->
        {{ HTML::script("assets/libs/apexcharts/apexcharts.min.js"); }}
        <!-- Saas dashboard init -->
        {{ HTML::script("assets/js/pages/saas-dashboard.init.js"); }}


        {{ HTML::script("assets/js/app.js"); }}
        <!--script src="https://www.dashboard.igrejasmart.com.br/js/jquery.maskMoney.js"></script-->
       >


    </body>


</html>