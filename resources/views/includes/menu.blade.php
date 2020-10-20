<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}">學習交換平台</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">關於我們</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">數據分析</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">發表文章</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">聊天室</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
     </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          會員中心
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">個人資料</a>
          <a class="dropdown-item" href="#">我的貼文</a>
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

        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
    
  </div>
</nav>




  