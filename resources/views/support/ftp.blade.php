@extends('page')
@section('content')

    <div class="panel panel-default support-panel">

        <div class="panel-heading">File Upload Details</div>

        <div class="panel-body">

            <h2>How to upload files to your website</h2>

            <p>
                You can use DirectAdmin's web based File Manager (after loging in to DirectAdmin) or a dedicated FTP client (such as Filezilla) to upload files to your website.
            </p>

            <h4>Here is your FTP information:</h4>
            <ul>
                <li><strong>FTP Host: </strong>yourdomainname.com or 158.69.245.96 or host.bigrounds.com</li>
                <li><strong>Port: </strong>21</li>
                <li><strong>Username: </strong>{{ Auth()->user()->username }}</li>
                <li><strong>Password: </strong>Your DirectAdmin Password*</li>
            </ul>


            <p> <strong>Important information:</strong> All your files should be uploaded to public_html folder. Files uploaded to other folders will not be accesible or seen from Web. Do not delete any other folders such as "mail", "etc", "tmp" or your account will stop functioning correctly.
            </p>

            <p>
                If you are using your own domain and it is not yet resolving to our server (for example you have just updated your nameservers), you can use 158.69.245.96 or host.bitgrounds.com as your FTP hostname.
            </p>

            <p>
                * Your FTP password is the same as the password you registered for your DirectAdmin hosting panel, if necessary your can change it by logging into DirectAdmin and entering FTP Management settings.
            </p>

        </div>
        <div class="panel-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary pull-right">Back</a>
        </div>
    </div>



@endsection