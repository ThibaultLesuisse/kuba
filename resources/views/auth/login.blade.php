@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
    <h1 class="display-3">Inloggen</h1>
    </div>
</div>
</div>
</div>

<div class="container">
  <div class="row">
      <div class="col-md-8 offset-md-2">
<div class="card card-block" style="margin-top:5%;">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                            <label for="email" class="col-md-4 control-label">E-Mail Adres</label>

                            <div class="col-sm-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                            <label for="password" class="col-md-4 control-label">Wachtwoord</label>

                            <div class="col-sm-10">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Vergeet me niet
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Inloggen
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Wachtwoord vergeten?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
