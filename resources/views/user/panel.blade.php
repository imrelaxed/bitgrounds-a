@extends('home')
@section('controls')

    <!----Control Panel----->

<div class="panel panel-default control-panel">

    <div class="panel-heading">Your Dashboard</div>

        <div class="panel-body gutter__padding">
            <div class="col-md-7 gutter__padding">

                <div class="row text-center control-panel__head">
                    <h4>Account Information</h4>
                </div>

                <div class="row control-panel__cell">
                    <table class="table">
                        <tbody>
                            <tr>

                                <td>DirectAdmin Username:</td>
                                <td>{{ $da->getusername() }}</td>

                            </tr>
                        <tr>

                            <td>Main Domain:</td>
                            <td> <a href="http://{{ $da->getDefaultDomain() }}" target="_blank">{{ $da->getDefaultDomain() }}</a> </td>

                        </tr>
                            <tr>

                                <td>Domains Hosted:</td>
                                <td> {{ $da->getDomainUsage() }} out of @if($da->getDomainLimit()) {{ $da->getDomainLimit() }} @else Unlimited @endif </td>

                            </tr>
                        <tr>

                            <td>Hosting Plan:</td>
                            <td>
                                <span class="text-success">{{ $subscription->stripe_plan }}</span>
                            </td>


                        </tr>
                        <tr>


                            <td>Hosting Status:</td>
                            <td>@if($da->isSuspended()) Suspended @else Active @endif </td>


                        </tr>
                            <tr>

                                <td>Subscription Status:</td>
                                <td>@if(Auth::user()->subscription_active) Subscribed @else Stopped (Please Resume) @endif
                                </td>

                            </tr>
                        <tr>

                            <td>Card On File:</td>
                            <td>{{ Auth::user()->card_brand }} ({{ Auth::user()->card_last_four }}) <a href="{{ route('billing') }}"> Click Here to Update</a>
                            </td>

                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="col-md-5 gutter__padding panel-section1">
                <div class="col-xs-4 gutter__padding">

                    <div class="row text-center control-panel__head">
                        <h4>Manage</h4>
                    </div>

                    <ul class="manage-bar">

                        <li><a href="https://host.bitgrounds.com:2222/" target="_blank"><span class="menu-icon fa fa-cogs"></span>Hosting Administration </a></li>
                        <li><a href="https://host.bitgrounds.com:2222/CMD_LOST_PASSWORD" target="_blank"><span class="menu-icon fa fa-unlock-alt"></span>Reset Hosting Password </a></li>
                        <li><a href="https://host.bitgrounds.com/webmail/" target="_blank"><span class="menu-icon fa fa-envelope"></span>WebMail </a></li>



                    </ul>

                </div>

                <div class="col-xs-8 gutter__padding">
                    <div class="row text-center control-panel__head">
                        <h4>Important Information</h4>
                    </div>
                    <ul class="panel-section">
                        <a href="{{ route('dns') }}" class="btn-custom"><li><span class="fa fa-link"></span>  Nameserver / DNS Details</li></a>
                      <a href="{{ route('directadmin') }}" class="btn-custom"><li><span class="fa fa-user-o"></span>  Administration Details</li></a>
                      <a href="{{ route('ftp') }}" class="btn-custom"><li><span class="fa fa-files-o"></span>  File Upload Details</li></a>
                       <a href="{{ route('email-help') }}" class="btn-custom"><li><span class="fa fa-envelope-o"></span>  Email Setup Instructions</li></a>
                    </ul>
                </div>

        </div>
    </div>
</div>


@endsection