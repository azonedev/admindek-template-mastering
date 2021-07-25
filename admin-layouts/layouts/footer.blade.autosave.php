    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->


    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('admin/js/waves.min.js')}}"></script>

    <script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('admin/js/pcoded.min.js')}}"></script>
    <script src="{{asset('admin/js/vertical-layout.min.js')}}"></script>

    <script src="{{asset('admin/js/toastr.min.js')}}"></script>
    {{-- call toaster notification --}}
    {!! Toastr::message() !!}

    <script>
    
        @if(Session::has('message'))
        var type = "{{ Session::get('alert') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
    
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
    
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
    
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
      @endif
    </script>

    {{-- data-tables --}}
    <script src="{{asset('admin/js/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('admin/js/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/js/data-table-custom.js')}}"></script>

    @yield('extra-js')

    <script src="{{asset('admin/js/script.min.js')}}"></script>

    @yield('test-script')
</body>
</html>
