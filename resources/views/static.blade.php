@extends('app')

@section('page-content')
    <div class="bit-page">
        <div class="bit-container">
            @include('modules.sessions.notice')

            @yield('content')

        </div>
    </div>
@endsection