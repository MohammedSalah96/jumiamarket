<!DOCTYPE html>
<html>

<head>
    @include('components.front.meta')
</head>

<body style="background-color: #ecf0f1">
    <!--begin::Header-->
    @include('components.front.header')
    <!--end::Header-->

    <!--begin::Content-->
    <div class="container">
        @yield('content')
    </div>
    <!--end::Content-->

    <!--begin::Footer-->
    @include('components.front.footer')
    <!--end::Footer-->

    <!--begin::Scripts-->
    @include('components.front.scripts')
    <!--begin::Scripts-->
</body>

</html>