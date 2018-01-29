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

          <!-- START NAV -->
          <nav class="navbar is-white">
            <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item brand-text" href="/">
                  Devrantia
                </a>
                <div class="navbar-burger burger" data-target="navMenu">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
              <div id="navMenu" class="navbar-menu">
                <div class="navbar-start">
                  <a class="navbar-item" href="#">
                    Home
                  </a>
                  <a class="navbar-item" href="#">
                    Link
                  </a>
                  <a class="navbar-item" href="#">
                    Link
                  </a>
                  <a class="navbar-item" href="#">
                    Link
                  </a>
                </div>
                <div class="navbar-end">
                  <a class="navbar-item" href="#">
                    Exit
                  </a>
                </div>

              </div>
            </div>
          </nav>
          <!-- END NAV -->

          <section class="section main">
            <div class="container">
              <div class="columns">
                <div class="column is-3">
                  <div class="card is-fullwidth">
                    <header class="card-header">
                    </header>
                    <div class="card-content">
                      <a class="card-avatar">
                        <img src="http://placehold.it/150x150" class="card-avatar-img">
                      </a>

                      <div class="card-user">
                        <div class="card-user-name">
                          <a href="#">Name</a>
                        </div>
                        <span>
                          <a href="#"><span>title</span></a>
                        </span>
                      </div>

                      <div class="card-stats">
                        <ul class="card-stats-list">
                          <li class="card-stats-item">
                            <a href="#" title="9.840 Tweet">
                              <span class="card-stats-key">Experience</span>
                              <span class="card-stats-val">1</span>
                            </a>
                          </li>
                          <li class="card-stats-item">
                            <a href="#/following" title="885 Following">
                              <span class="card-stats-key">Reputation</span>
                              <span class="card-stats-val">0</span>
                            </a>
                          </li>
                          <li class="card-stats-item">
                            <a href="#">
                              <span class="card-stats-key">Devcoins</span>
                              <span class="card-stats-val">0</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column is-9">
                  <div class="box">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
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
