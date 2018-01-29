<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Devrantia</title>
        <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    </head>
    <body>

        <div id="app">

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
                      <form>
                        <div class="field">
                          <div class="control">
                            <input class="input is-large" type="email" placeholder="Your Email" autofocus="">
                          </div>
                        </div>

                        <div class="field">
                          <div class="control">
                            <input class="input is-large" type="password" placeholder="Your Password">
                          </div>
                        </div>
                        <div class="field">
                          <label class="checkbox">
                            <input type="checkbox">
                            Remember me
                          </label>
                        </div>
                        <a href="{{ url('home') }}" class="button is-block is-primary is-large">Login</a>
                        <br>
                        <a href="{{ url('home') }}" class="button is-block is-default is-large">Login using <i class="mdi mdi-github-circle"></i></a>
                      </form>
                    </div>
                    <p class="has-text-grey">
                      <a href="#">Sign Up</a> &nbsp;·&nbsp;
                      <a href="#">Forgot Password</a> &nbsp;·&nbsp;
                      <a href="#">Need Help?</a>
                    </p>
                  </div>
                </div>
              </div>
            </section>

        </div>

        <script src="{{ asset('js/manifest.js') }}"></script>
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
