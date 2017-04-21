@extends('page')
@section('content')

    <div class="panel panel-default support-panel">

        <div class="panel-heading">DNS Details</div>

        <div class="panel-body">

            <h2>Nameserver Settings</h2>

           <p>
               In order to attach your domain name to your web hosting account, you will need to point it to the correct nameservers.
               You may perform the change on your domain registrar website (where the domain was registered).
           </p>

          <h4>Bitgrounds Web Hosting uses the following nameservers:</h4>
           <ul>
               <li>ns1.bitgrounds.com</li>
               <li>ns2.bitgrounds.com</li>
           </ul>


           <p> Please mind that it can sometimes take up to 24 hours for DNS changes to fully propagate after nameservers are updated. However it usually happens much faster.</p>

        </div>
        <div class="panel-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary pull-right">Back</a>
        </div>
    </div>



@endsection