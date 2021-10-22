<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/iranian-sans" type="text/css"/>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <div id="app">
    <nav class="navbar shadow-sm navbar-expand-lg navbar-light bg-white sticky-top" style="background-color:#DCDCDC">
      <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!--Left Side Of Navbar -->
          <ul class="navbar-nav ml-2">
                


            <!-- Authentication Links -->
            <a class="btn btn-success" href="{{ route('newAdvForm') }}"  role="button">ثبت آگهی</a>
            @guest
                @if (Route::has('login'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('ورود') }}</a>
                  </li>
                @endif
                @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>
                  </li>
                @endif
                @else
                  <li class="nav-item dropdown">
                    @if(auth()->user()->type=='admin')
                    <a type="button" class="btn btn-warning ml-2" href="{{route('admin_panel')}}">
                      ورود به پنل مدیریت
                    </a>
                    @endif
                    <button type="button" class="btn btn-outline-primary dropdown-toggle ml-2" data-toggle="dropdown">
                      {{ Auth::user()->firstname }}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('dashboard') }}">
                        {{ __('آگهی های من') }}
                      </a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('خروج') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </div>
                  </li>
              @endguest
            </ul>
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: #1bb9b7;" role="button" data-toggle="dropdown" aria-expanded="false">
                {{ __('دانشگاه ها') }}
              </a>
              <div class="dropdown-menu force-scroll dropdown-menu-right text-right" aria-labelledby="navbarDarkDropdownMenuLink">
                @foreach($publishedUniversities as $university)
                <a class="dropdown-item" value="{{$university->id}}"
                  href="{{ route('chooseUni', ['id'=>$university->id, 'name'=>$university->name]) }}">
                    {{ucfirst($university->name)}}
                </a>
                @endforeach
              </div>
            </div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: #f2711c;" role="button" data-toggle="dropdown" aria-expanded="false">
                {{ __('شهرها') }}
              </a>
              <div class="dropdown-menu force-scroll dropdown-menu-right text-right" aria-labelledby="navbarDarkDropdownMenuLink">
                @foreach($publishedCities as $city)
                <a class="dropdown-item" value="{{$city->id}}"
                  href="{{ route('chooseLocation', ['id'=>$city->id, 'name'=>$city->name]) }}">
                    {{ucfirst($city->name)}}
                </a>
                @endforeach
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('displayAllAds') }}">{{ __('همه آگهی ها') }}</a>
            </li>
            <a class="pt-2 pl-2" href="{{ url('/') }}">
              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
              </svg>
            </a>
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>

    <div class="pt-5">
    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(239, 246, 251, 1)" offset="0%"></stop><stop stop-color="rgba(239, 246, 251, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,20L21.8,16.7C43.6,13,87,7,131,15C174.5,23,218,47,262,48.3C305.5,50,349,30,393,23.3C436.4,17,480,23,524,36.7C567.3,50,611,70,655,71.7C698.2,73,742,57,785,50C829.1,43,873,47,916,43.3C960,40,1004,30,1047,33.3C1090.9,37,1135,53,1178,53.3C1221.8,53,1265,37,1309,25C1352.7,13,1396,7,1440,18.3C1483.6,30,1527,60,1571,68.3C1614.5,77,1658,63,1702,51.7C1745.5,40,1789,30,1833,25C1876.4,20,1920,20,1964,26.7C2007.3,33,2051,47,2095,43.3C2138.2,40,2182,20,2225,25C2269.1,30,2313,60,2356,60C2400,60,2444,30,2487,20C2530.9,10,2575,20,2618,23.3C2661.8,27,2705,23,2749,18.3C2792.7,13,2836,7,2880,6.7C2923.6,7,2967,13,3011,21.7C3054.5,30,3098,40,3120,45L3141.8,50L3141.8,100L3120,100C3098.2,100,3055,100,3011,100C2967.3,100,2924,100,2880,100C2836.4,100,2793,100,2749,100C2705.5,100,2662,100,2618,100C2574.5,100,2531,100,2487,100C2443.6,100,2400,100,2356,100C2312.7,100,2269,100,2225,100C2181.8,100,2138,100,2095,100C2050.9,100,2007,100,1964,100C1920,100,1876,100,1833,100C1789.1,100,1745,100,1702,100C1658.2,100,1615,100,1571,100C1527.3,100,1484,100,1440,100C1396.4,100,1353,100,1309,100C1265.5,100,1222,100,1178,100C1134.5,100,1091,100,1047,100C1003.6,100,960,100,916,100C872.7,100,829,100,785,100C741.8,100,698,100,655,100C610.9,100,567,100,524,100C480,100,436,100,393,100C349.1,100,305,100,262,100C218.2,100,175,100,131,100C87.3,100,44,100,22,100L0,100Z"></path></svg>
    <footer class="site-footer">
      <div class="container pt-2">
        <div class="row pt-3">
          <div class="col-sm-12 col-md-6">
            <p class="text-justify" id="namad">
              <img id="img-namad" style="width:250px;height:130px;" src="namad.png"/>
            </p>
          </div>
          <div class="col-xs-6 col-md-3">
            <p>راهنمای مشتریان</p>
            <ul class="footer-links">
              <li><a href="{{ route('questions') }}">سوالات متداول</a></li>
              <li><a href="{{ route('rules') }}">قوانین و مقررات</a></li>
              <li><a href="{{ route('policy') }}">سیاست حفظ حریم شخصی</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-md-3">
            <p>بارترلند</p>
            <ul class="footer-links">
              <li><a href="{{ route('register') }}">ثبت نام</a></li>
              <li><a href="{{ route('login') }}">ورود</a></li>
              <li><a href="{{ route('newAdvForm') }}">ثبت آگهی</a></li>
              <li><a href="{{ route('contactForm') }}">ارتباط با ما</a></li>
              <li><a href="{{ route('aboutUs') }}">درباره بارترلند</a></li>
            </ul>
          </div>
        </div>
          <hr>
      </div>

      <div class="container">
        <div class="row">
          
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons pull-left">
                            <!-- footer icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:10px;" class="bi bi-telegram" viewBox="0 0 16 16">
                <a target="_blank" href="https://telegram.org/">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </a>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:10px;" class="bi bi-telegram" viewBox="0 0 16 16">
                <a target="_blank" href="https://telegram.org/">
                  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                </a>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:10px;" class="bi bi-telegram" viewBox="0 0 16 16">
                <a target="_blank" href="https://telegram.org/">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </a>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:10px;" class="bi bi-telegram" viewBox="0 0 16 16">
                <a target="_blank" href="https://telegram.org/">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                </a>
              </svg>
            </ul>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">.کلیه ی حقوق این سایت متعلق به تیم می باشد</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  </div>
</body>
</html>
