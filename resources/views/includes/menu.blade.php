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
  <style>
    .navbar-fixed-top {
      position: fixed;
      right: 0;
      left: 0;
      top: 0;
      z-index: 1030;
    }
  </style>
</head>

<body>

  <div class="container navbar-fixed-top">
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ url('/index') }}">學習交換平台</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">關於我們</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">數據分析</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/post') }}">發表文章</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/message') }}">聊天室</a>
          </li>
        </ul>
      </div>
      @auth
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/#/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('profile.show') }}">個人資料</a>
            <a class="dropdown-item" href="{{ url('/mypost') }}">我的貼文</a>
            <a class="dropdown-item" href="#">讚過的文章</a>
            <div class="dropdown-divider"></div>
            @if (Route::has('login'))
            @auth
            <a class="dropdown-item" href="{{ url('/logout') }}">登出</a>
            @else
            <a class="dropdown-item" href="{{ url('/login') }}">登入</a>
            @if (Route::has('register'))
            <a class="dropdown-item" href="{{ url('/register') }}">註冊</a>
            @endif
            @endif
            @endif
          </div>
        </li>
      </ul>
      @endauth
      @guest
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/login') }}">登入</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/register') }}">註冊</a>
        </li>
      </ul>
      @endguest

    </nav>
  </div>
</body>

</html>