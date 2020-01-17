@include('layouts.header')
<div class="container-scroller">
        @include('partials.navbar')
         <div class="container-fluid page-body-wrapper">
             @include('partials.sidebar')
                 <div class="main-panel">
                     <div class="content-wrapper">
                        @yield('content')

@include('layouts.footer')
