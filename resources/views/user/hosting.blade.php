@extends('home')
@section('controls')

    <div class=" text-center">

        <h4>Just one more step before you can start using Bitgrounds Web Hosting.</h4>
        <h4>Let's setup the credentials for your DirectAdmin hosting panel.</h4>

    </div>

    <div class="panel panel-default control-panel">

        <div class="panel-heading">DirectAdmin Hosting Panel Setup</div>

            <div class="panel-body">

                <form class="form-horizontal padding-medium" role="form" method="POST" action="{{ route('host') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('domain') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Domain Name</label>

                        <div class="col-md-6">
                            <input id="domain" type="text" class="form-control" name="domain" value="{{ old('domain') }}" required placeholder="Example: yourdomain.com">

                            @if ($errors->has('domain'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('domain') }}</strong>
                                    </span>
                                @else
                                <span class="help-block">
                                    <strong>Note:</strong> If you have not registered a domain yet you must do so before you enter it in this box.
                                    You can register a domain by <a href="http://www.namesilo.com" target="_blank">clicking here.</a>
                            </span>
                            @endif


                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Username</label>

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus placeholder="Unique username">

                            @if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="6-15 alphanumeric, mixed case characters">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Register DirectAdmin Hosting Panel
                            </button>
                        </div>
                    </div>
                </form>


            </div>
    </div>



@endsection