@extends('page')
@section('content')

    <div class="panel panel-default support-panel">

        <div class="panel-heading">DirectAdmin Details</div>

        <div class="panel-body">

            <h2>Web Hosting Administration</h2>

            <p>
                Bitgrounds uses the DirectAdmin Control Panel for management of it's web hosting backend. DirectAdmin is one of the most user friendly web hosting control
                panels in the industry. It has enough features to make a poweruser happy while bein easy and accessible for newbies.
            </p>

            <h4>To log into your DirectAdmin hosting panel use one of the following links:</h4>
            <ul>
                <li><a href="https://host.bitgrounds.com:2222/" target="_blank">https://host.bitgrounds.com:2222/</a></li>
                <li><a href="https:/158.69.245.96:2222/" target="_blank">https://158.69.245.96:2222/</a></li>
            </ul>


            <p>You can find your Username and a Password reset link inside your dashboard.</p>

        </div>
        <div class="panel-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary pull-right">Back</a>
        </div>
    </div>



@endsection