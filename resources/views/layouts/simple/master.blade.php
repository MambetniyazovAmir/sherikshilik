<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>IOI store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="IPSD" name="description" />
    <meta content="IPSD" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}">

    @include('layouts.simple.css')

    @yield('style')

</head>


<body>

<!-- <body data-layout="horizontal" data-topbar="colored"> -->

<!-- Begin page -->
<div id="layout-wrapper">

@include('layouts.simple.header')

<!-- ========== Left Sidebar Start ========== -->
    <!-- Left Sidebar End -->

@include('layouts.simple.sidebar_user')


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                @if(session()->get('error'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session()->get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        @yield('breadcrumb-title')
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @yield('breadcrumb-items')
                                            </div>
                                        </div>
                                    </div>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div><!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        @include('layouts.simple.footer')

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Выберите тему</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>



        <!-- Settings -->
        <hr class="mt-0" />

        <div class="p-4">
            <div class="mb-2">
                <img src="{{ asset('/assets/images/layouts/layout-1.jpg') }}" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Дневной</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('/assets/images/layouts/layout-2.jpg') }}" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" />
                <label class="form-check-label" for="dark-mode-switch">Ночной</label>
            </div>

        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>


<!-- JAVASCRIPT -->
@include('layouts.simple.script')

</body>
</html>
