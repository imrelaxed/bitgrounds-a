@extends('app')

@section('page-content')
<div class="page bit-page">
    <div class="container bs">
        @include('modules.sessions.notice')

        @yield('content')

    </div>
</div>
    @endsection