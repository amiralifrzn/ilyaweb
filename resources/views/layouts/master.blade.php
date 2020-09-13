@include('layouts.head')
<body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  "
      data-open="click"
      data-menu="vertical-menu-modern"
      data-col="2-columns">
@include('layouts.nav')
@include('layouts.main_menu')


        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">


                    @yield('content')


                </div>
            </div>
        </div>
        <!-- END: Content-->


@include('layouts.demo_chat')
@include('layouts.footer')
@include('layouts.script')
</body>
<!-- END: Body-->
