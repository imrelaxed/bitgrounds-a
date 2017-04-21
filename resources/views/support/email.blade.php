@extends('page')
@section('content')

    <div class="panel panel-default support-panel">

        <div class="panel-heading">Email Setup Instructions</div>

        <div class="panel-body">

            <h2>How to setup and use yourname@yourdomainname.com emails</h2>

            <p>
                To create, remove and manage E-mail accounts, please log into DirectAdmin and go to the "Email Accounts" section.
            </p>

            <p>
                When your E-mail account is already setup, there are several ways to access it.
                If you do not have any offline mail applications, you may use WebMail.
            </p>

            <h4>To access webmail:</h4>
            <ul>
                <li>Use this link <a href="https://bitgrounds.com/webmail/">https://bitgrounds.com/webmail/</a></li>
                <li>Or download our <a href="https://host.bitgrounds.com/webmail-install.exe">webmail application.</a></li>
            </ul>


            <p>Your login to webmail is email address you have created and password that you have selected inside DirectAdmin -> Email Accounts.
            </p>

            <p>
                To configure an offline email client such as Windows Mail, Mac Mail and similar, please use the following settings (if you have any trouble, please contact our support):
            </p>

            <ul>
                <li><strong>POP3 or IMAP Server: </strong>mail.host.bitgrounds.com</li>
                <li><strong>POP3 or IMAP Port: </strong>993</li>
                <li><strong>SMTP Server: </strong>mail.host.bitgrounds.com</li>
                <li><strong>SMTP Port: </strong>465</li>
                <li><strong>Connection Security: </strong>SSL/TLS</li>

                <li><strong>Email Username: </strong>Your full email address, e.g. name@yourdomain.com</li>
                <li><strong>Password: </strong>Your email password set in DirectAdmin->Email Accounts</li>
            </ul>

        </div>
        <div class="panel-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary pull-right">Back</a>
        </div>
    </div>



@endsection