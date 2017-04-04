@extends('page')

@section('content')
<div class="control-page">
<div class="text-center">
                    <h2>Hi <span class="text-primary"> {{ ucfirst(Auth::user()->name) }}</span></h2>

                    @if( $is_subscribed )

                       <p> You are currently on the <span class="text-success">{{ $subscription->stripe_plan }}</span> hosting plan. </p>

                        @if( $subscription->onGracePeriod() )

                            <div class="alert alert-danger">
                                <h4 class="modal-title">Your hosting service subscription will expire on {{ $subscription->ends_at->toFormattedDateString() }}.</h4><h4> After this date you
                                    will no longer be able to use our hosting services unless your resume you subscription</h4>
                            </div>

                            <form method="post" action="{{ route('subscriptionResume') }}">
                                {{ csrf_field() }}
                                <button type="submit" class="button button--red">Resume Subscription Now</button>
                            </form>
                            <br>

                        @endif
</div>
<hr class ="invisible">

<!----Control Panel----->

            <div class="panel panel-default control-panel">
                <div class="panel-heading">Control Panel</div>
                <div class="panel-body gutter__padding">
<div class="col-md-7 gutter__padding">
    <div class="row text-center control-panel__head">
        <h4>Account Information</h4>
    </div>
    <div class="row control-panel__cell">

        <table class="table">
            <tbody>

                <tr>
                    <td>Main Domain:</td>

                    <td> <a href="http://www.domain.com" target="_blank">http://www.domain.com</a> </td>
                </tr>
                <tr>
                    <td>Account Status:</td>
                    <td>Active</td>
                </tr>

                <tr>
                    <td>Payment Details:</td>
                    <td>Every 1 month(s), via Credit Card</td>
                </tr>
                <tr>
                    <td>Card Details:</td>
                    <td colspan="2">
                        <a href="https://www.domain.com" target="_blank">Update Credit Card</a> (Order Number 5107640379)                                        </td>
                </tr>
                <tr>
                    <td>Renewal Date:</td>
                    <td>2017-04-13                                        Auto Renewal: <a onclick="return confirmSubmit_stopAutoRenewal()" href="stop_autorenewal.php?accountID=178816" style="color: green;" onmouseover="this.style.color='Lime';" onmouseout="this.style.color='green';" title="Stop Auto Renewal">ON</a>                                    </td>
                </tr>



            </tbody>
        </table>


    </div>
</div>
<div class="col-md-5 gutter__padding">

<div class="col-xs-4 gutter__padding">
    <div class="row text-center control-panel__head">
        <h4>Manage</h4>
    </div>
<ul class="manage-bar">

    <li><a href="#"><span class="menu-icon fa fa-cogs"></span>Hosting Control </a></li>
    <li><a href="#"><span class="menu-icon fa fa-unlock-alt"></span>Hosting Password </a></li>
    <li><a href="#"><span class="menu-icon fa fa-envelope"></span>WebMail</a></li>



</ul>
</div>

    <div class="col-xs-8 gutter__padding">
        <div class="row text-center control-panel__head">
            <h4>Important Information</h4>
        </div>
        <a href="" class="btn-block btn btn-info"><span class="fa fa-link"></span>  Nameserver / DNS Details</a>
        <a href="" class="btn-block btn btn-info"><span class="fa fa-user-o"></span>  Administration Details</a>
        <a href="" class="btn-block btn btn-info"><span class="fa fa-files-o"></span>  File Upload Details</a>
        <a href="" class="btn-block btn btn-info"><span class="fa fa-envelope-o"></span>  Email Setup Instructions</a>

    </div>

        </div>
            </div>
            </div>

<hr class="invisible">
<hr class="invisible">
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


</div>

@endsection
