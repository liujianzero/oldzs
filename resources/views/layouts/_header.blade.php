<nav class="navbar navbar-expand-lg navbar-dark fixed-top px-3 px-sm-1 py-1 header header-bg">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img class="brand-logo" src="{{ url('images/logo.png') }}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse menu float-right" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">首页</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ active_class(if_route('about')) }}" href="{{ route('about') }}">十一维度</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ active_class(if_route('join')) }}" href="{{ route('join') }}">加盟服务商</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ active_class(if_route('service')) }}" href="{{ route('service') }}">服务与支持</a>
        </li>
      </ul>
      {{--<ul class="navbar-nav ml-auto">
        @guest
          <li class="nav-item {{ active_class(if_route('login')) }}">
            <a class="nav-link" href="{{ route('login') }}">登录</a>
          </li>
          <li class="nav-item {{ active_class(if_route('register')) }}">
            <a class="nav-link" href="{{ route('register') }}">注册</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);">{{ \Auth::user()->nickname }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">退出</a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        @endguest
      </ul>--}}
    </div>
  </div>
</nav>
