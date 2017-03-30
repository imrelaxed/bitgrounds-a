@extends('app')

@section('page-content')
<div class="page bit-page">
    <div class="container markdowned">
        <div class="bit-title">
            <h1 class="h1">{{ isset($title) ? $title : 'Default' }}</h1>
        </div>

        @yield('content')

    </div>
</div>
    @endsection