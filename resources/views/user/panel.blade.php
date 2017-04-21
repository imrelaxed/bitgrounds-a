@extends('home')
@section('controls')

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
                                <td> <a href="http://{{ $da->getDefaultDomain() }}" target="_blank">{{ $da->getDefaultDomain() }}</a> </td>

                            </tr>
                        <tr>

                            <td>Username:</td>
                            <td>{{ $da->getusername() }}</td>

                        </tr>
                        <tr>

                            <td>Status:</td>
                            <td>@if($da->isSuspended()) Suspended @else Active @endif </td>

                        </tr>
                        <tr>

                            <td>Card Details:</td>
                            <td colspan="2">
                                <a href="https://www.domain.com" target="_blank">Update Credit Card</a> (Order Number 5107640379)
                            </td>

                        </tr>
                        <tr>

                            <td>Renewal Date:</td>
                            <td>2017-04-13 Auto Renewal: <a onclick="" href="#" style="color: green;" onmouseover="this.style.color='Lime';" onmouseout="this.style.color='green';" title="Stop Auto Renewal">ON</a>
                            </td>

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

                        <li><a href="https://host.bitgrounds.com:2222/" target="_blank"><span class="menu-icon fa fa-cogs"></span>Hosting Control </a></li>
                        <li><a href="https://host.bitgrounds.com:2222/CMD_LOST_PASSWORD" target="_blank"><span class="menu-icon fa fa-unlock-alt"></span>Hosting Password </a></li>
                        <li><a href="https://host.bitgrounds.com/webmail/" target="_blank"><span class="menu-icon fa fa-envelope"></span>WebMail</a></li>



                    </ul>

                </div>

                <div class="col-xs-8 gutter__padding">
                    <div class="row text-center control-panel__head">
                        <h4>Important Information</h4>
                    </div>
                    <a href="{{ route('dns') }}" class="btn-block btn btn-info"><span class="fa fa-link"></span>  Nameserver / DNS Details</a>
                    <a href="{{ route('directadmin') }}" class="btn-block btn btn-info"><span class="fa fa-user-o"></span>  Administration Details</a>
                    <a href="{{ route('ftp') }}" class="btn-block btn btn-info"><span class="fa fa-files-o"></span>  File Upload Details</a>
                    <a href="{{ route('email-help') }}" class="btn-block btn btn-info"><span class="fa fa-envelope-o"></span>  Email Setup Instructions</a>

                </div>

        </div>
    </div>
</div>


@endsection