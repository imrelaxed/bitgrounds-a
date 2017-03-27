@extends('app')

@section('page-content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="page bit-page">
    <div class="container markdowned">
        <div class="bit-title">
            <h1 class="h1">{{ isset($title) ? $title : 'Default' }}</h1>
        </div>

        @yield('content')

    </div>
</div>
    @endsection