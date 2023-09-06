<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon"> --}}
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png"> --}}
    
<link rel="stylesheet" href="{{ asset('') }}assets/css/shared/iconly.css">

<style>
  .active {
    color: white !important;
  }
</style>

</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
              @include('layout.topbar')
                <nav class="main-navbar">
                    @include('layout.navbar')
                </nav>

            </header>

            <div class="content-wrapper container">
                
              @yield('content')

            </div>

            <footer>
                @include('layout.footer')
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/pages/horizontal-layout.js') }}"></script>
    
<script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

</body>

</html>
