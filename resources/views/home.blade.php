@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body text-center">
                    <h1>Welcome <span class="text-primary">{{ Auth::user()->name }}</span></h1>

                    @if( $is_subscribed )

                       <h4> You are subscribed to the <span class="text-primary">{{ $subscription->stripe_plan }}</span> plan. </h4> <br>

                        @if( $subscription->onGracePeriod() )

                            <div class="alert alert-warning">
                                <h4 class="modal-title">Subscription expiring at {{ $subscription->ends_at->toFormattedDateString() }}</h4>
                            </div>

                            <form method="post" action="{{ route('subscriptionResume') }}">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-success">Resume Subscription</button>
                            </form>
                            <br>

                        @else
                            <a href="{{ route('confirmCancellation') }}" class="btn btn-danger">Cancel Subscription</a>
                        @endif

                    @else

                        <h4 class="text-danger">You are not subscribed to any plan.
                        </h4>

                    @endif






                </div>
            </div>
        </div>
    </div>
</div>

@endsection
