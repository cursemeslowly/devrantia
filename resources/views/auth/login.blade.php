@extends('layouts.nonav')

@section('content')

<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">Devrantia</h3>
                <p class="subtitle has-text-grey">Please login to proceed.</p>
                <div class="login box">
                    <figure class="avatar">
                        <img src="{{ asset('images/logo-sm.png') }}">
                    </figure>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="field">
                            <div class="control">
                                <input id="email" type="email" class="input is-large" name="email" value="{{ old('email') }}" placeholder="Your Email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input id="password" type="password" class="input is-large" name="password" placeholder="Your Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="field">
                            <label class="checkbox">
                                 <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                        <button type="submit" class="button is-fullwidth is-primary is-large">
                            Login
                        </button>
                        <br>
                        <a href="{{ url('login/github') }}" class="button is-block is-default is-large">Login using <i class="mdi mdi-github-circle"></i></a>
                    </form>
                </div>
                <p class="has-text-grey">
                    <a href="{{ url('register') }}">Register</a> &nbsp;·&nbsp;
                    <a href="#">Forgot Password</a> &nbsp;·&nbsp;
                    <a href="#">Need Help?</a>
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
