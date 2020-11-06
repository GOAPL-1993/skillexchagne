<?php

use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>

<body>

  <div class="container navbar-fixed-top">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ url('/index') }}">mrc_test</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">


          @auth
          <li class="nav-item">
            <a class="nav-link" href="logout">登出</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('profile.show') }}">修改個人資料</a>
          </li>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">我的收藏</a>
            <div class="dropdown-divider"></div>
            @if (Route::has('login'))
            @auth
            <a class="dropdown-item" href="logout">登出</a>
            @else
            <a class="dropdown-item" href="{{ url('/login') }}">登入</a>
            @if (Route::has('register'))
            <a class="dropdown-item" href="{{ url('/register') }}">註冊</a>
            @endif
            @endif
            @endif
            @endauth
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/login') }}">登入</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/register') }}">註冊</a>
            </li>
            @endguest

          </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</body>

</html>