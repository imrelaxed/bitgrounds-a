@extends('app')

@section('page-content')
<div class="bit-page">
    <div class="container">
        @include('modules.sessions.notice')

        @yield('content')

    </div>
</div>
    @endsection