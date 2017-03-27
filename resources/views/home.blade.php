@extends('page')

@section('content')


                    <h2>Welcome <span class="text-primary">{{ Auth::user()->name }}</span></h2>

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

                        <h4 class="text-danger">
                            You are not subscribed to any plan.
                        </h4>

                        @if( !empty($plans) )

                            <h2>Please choose a plan.</h2>



                            <div class="row text-center">
                                <div class="col-md-12">
                                    @include('modules.plans.all')
                                </div>
                            </div>



                            @endif

                    @endif







@endsection
