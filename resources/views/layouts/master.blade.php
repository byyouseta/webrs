<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.partials.head.head-meta')
    <title>Dasher Free - Responsive Bootstrap 5 Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/swiper-bundle.min.css') }}" />


    @include('backend/partials/head/head-links')
    @livewireStyles
</head>

<body>
    <!-- Vertical Sidebar -->
    <div>
        @include('backend/partials/sidebar-collapse')

        <!-- Main Content -->
        <div id="content" class="position-relative h-100">
            @include('backend/partials/topbar-second')
            <!-- container -->
            <div class="custom-container">
                <!-- row -->
                @yield('content')
            </div>
        </div>
    </div>

    @include('backend/partials/scripts')
    <!-- jsvectormap -->
    <script src="{{ asset('backend/assets/js/vendors/sidebarnav.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/maps/world.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/maps/world-merc.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/choices.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vendors/choice.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/js/vendors/swiper.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/assets/js/vendors/swiper.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    @livewireScripts
</body>

</html>
