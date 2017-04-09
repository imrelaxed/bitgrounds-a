@extends('page')

@section('content')
    <h1>Created User Info</h1>

    Username: @if( $createdName !== "" ) {{ $createdName }}  @endif
    <br>Type: @if( $createdType !== "" ) {{ $createdType }} @endif
    <br>Domain: @if( $createdDomain !== "" ) {{ $createdDomain }} @endif
    <br>
    <br>
    <br>Error: @if( $error !== "" ) {{ $error }} @endif


    @endsection