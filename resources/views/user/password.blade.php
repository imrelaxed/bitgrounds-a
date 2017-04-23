@extends('page')

@section('content')

    <div class="col-md-8 col-md-offset-2">

    <div class="panel panel-default">
        <div class="panel-heading">Change Password</div>

            <div class="panel-body">

            <form method="POST" action="/user/password" class="form-horizontal">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Current Password</label>

                    <div class="col-md-6">
                        <input id="current_password" type="password" class="form-control" name="current_password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('current_password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>
                <div class="panel-footer clearfix">
                    <div class="pull-right">
                    <a class="btn-alt btn-success" href="{{ URL::previous() }}">Cancel</a>
                    <button class="btn-alt btn-primary" type="submit">Change Password</button>
                </div>
                </div>
            </form>

    </div>
    </div>
@stop
