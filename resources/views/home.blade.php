@extends('page')
@section('content')
<div class="control-page">
    <div class="text-center">

        <h2>Welcome <span class="text-primary"> {{ ucfirst(Auth::user()->name) }}</span></h2>

        <!------ Subscribed ------->
        @if( $is_subscribed )

            <!------ Grace Period ------->
            @if( $subscription->onGracePeriod() )

                            <div class="alert alert-danger">
                                <h4 class="modal-title">Your hosting service subscription will expire on {{ $subscription->ends_at->toFormattedDateString() }}.</h4>
                                <h4> After this date you will no longer be able to use our hosting services unless your resume you subscription</h4>
                            </div>

                            <form method="post" action="{{ route('subscriptionResume') }}">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-success center-block">Resume Subscription Now</button>
                            </form>
                            <br>

            @endif
    </div>

        <!---- Control Panel or Hosting Setup ---->
        @yield('controls')


        @endif

</div>

@endsection
