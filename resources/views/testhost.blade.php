@extends('page')

@section('content')

    <h1>{{ Auth::user()->hosting_set }}</h1>

    @endsection