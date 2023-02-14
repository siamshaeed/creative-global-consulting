<!doctype html>
<html lang="en">

<head>
    {{--head include--}}
    @include('backend.partial.head')

    {{--style include--}}
    @include('backend.partial.style')
</head>

<body>
<div class="account-pages pt-sm-2">
    <div class="container">
{{--body include--}}
        @yield('content')
    </div>
</div>

{{--style script--}}
@include('backend.partial.script')
@stack('scripts')

</body>

</html>
