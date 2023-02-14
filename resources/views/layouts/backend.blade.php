<!doctype html>
<html lang="en">

<head>
    <!-- === Head Start === -->
    @include('backend.partial.head')
    <!-- === End Head === -->

    <!-- === Style Start === -->

    @include('backend.partial.style')
    @stack('styles')
    <!-- === End Style === -->
</head>

<body data-sidebar="dark">

<!-- === layout-wrapper start === -->
<div id="layout-wrapper">

    <!-- === Top-ber start === -->
    @include('backend.partial.topbar')
    <!-- === End Top-ber === -->

    <!-- === Left Sidebar Start === -->
    @include('backend.partial.sidebar')
    <!-- === End Left Sidebar Start === -->

    <!-- === Start main content === -->
    <div class="main-content">

        <div class="page-content">

            <div class="container-fluid">

                <!-- === Page Body Start === -->
                @yield('content')
                <!-- === End Page Body === -->
            </div>
        </div>
        <!-- === Footer Start === -->
        @include('backend.partial.footer')
        <!-- === End Footer === -->
    </div>
    <!-- === end main content === -->

</div>
<!-- === End layout-wrapper === -->

<!-- === Js and plugin start === -->
@include('backend.partial.script')
@stack('scripts')
<!-- === End Js and plugin === -->

<!-- === laravel toastr notification === -->
{!! Toastr::message() !!}

</body>

</html>
