@extends('app')

@section('page-content')
<div class="bit-page">
    <div class="container padding-large">
        @include('modules.sessions.notice')

        @yield('content')

    </div>
</div>
    @endsection