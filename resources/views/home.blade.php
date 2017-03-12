@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <br><hr><br>
                    @include('modules.forms.upgrade')

                    @if( $is_subscribed )

                        You are PRO, congrats

                    @endif
                    @if ( $user->subscribed('main') )
                        <br>User is passed
                        @endif
                {{ $app_settings->name }}
                </div>
            </div>
        </div>
    </div>
</div>

    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
@endsection
