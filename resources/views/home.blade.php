@extends('layouts.app')

@section('content')

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
              <a href="#">{{{ $user->profile->name }}}</a>
            </div>
            <span>
              <a href="#"><span>{{ $user->profile->title }}</span></a>
            </span>
          </div>

          <div class="card-stats">
            <ul class="card-stats-list">
              <li class="card-stats-item">
                <a href="#" title="9.840 Tweet">
                  <span class="card-stats-key">Experience</span>
                  <span class="card-stats-val">{{ $user->profile->experience }}</span>
                </a>
              </li>
              <li class="card-stats-item">
                <a href="#/following" title="885 Following">
                  <span class="card-stats-key">Reputation</span>
                  <span class="card-stats-val">{{ $user->profile->reputation }}</span>
                </a>
              </li>
              <li class="card-stats-item">
                <a href="#">
                  <span class="card-stats-key">Devcoins</span>
                  <span class="card-stats-val">{{ $user->profile->devcoins }}</span>
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

@endsection
