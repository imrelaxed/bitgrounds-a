<!doctype html>
<html lang="en-us" role="document">

@include('base.head')

<body class="@yield('page-class')">


        @include('modules.navigation')


@yield('page-content')

@include('base.footer')
@include('base.scripts')
@yield('additional-scripts')
<script src="/js/app.js"></script>

@include('services.google-analytics')
@include('services.heap-analytics')
@include('services.olark-customer-support')

</body>
</html>
