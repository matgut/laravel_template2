@include('layouts.header')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                @yield('content')
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
<!-- plugins:js -->
<script src={{asset("assets/majestic/vendor/base/vendor.bundle.base.js")}}></script>
<!-- endinject -->
<!-- inject:js -->
<script src={{asset("assets/majestic/js/off-canvas.js")}}></script>
<script src={{asset("assets/majestic/js/hoverable-collapse.js")}}></script>
<script src={{asset("assets/majestic/js/template.js")}}></script>
<!-- endinject -->
</body>

</html>
