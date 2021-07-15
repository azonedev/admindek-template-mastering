{{-- 
    includes:
    ---------
        header : admin.layouts.header
        navbar top : admin.layouts.nav-top
        navbar left : admin.layouts.nav-left
        footer : admin.layouts.footer

    section created : (yield) for this & all sub-templates
    -------------------------------------------------------
        On Master Template : 
            Page header title : page-icon, page-title, page-sub-title
            Page body / Main page content : main-content

        On Header Template : 
            Meta title : page-title
            Extra/Custom CSS for each template : extra-css
        
        On Footer Template :
            Extra/Custom JS for each template : extra-js
--}}

@include('admin.layouts.header')

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('admin.layouts.nav-top')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('admin.layouts.nav-left')

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="@yield('page-icon') bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>@yield('page-title')</h5>
                                            <span>@yield('page-sub-title')</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#!">Sample page</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

                                        <div class="row">
                                            <div class="col-sm-12"> 
                                                @yield('main-content')
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>


{{-- footer --}}
@include('admin.layouts.footer')
