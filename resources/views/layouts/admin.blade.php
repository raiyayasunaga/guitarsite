<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            {{-- CSRFから保護できるように設定している --}}
            <meta name="csrf-token" content="{{ csrf_token() }}">

            {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
            <title>@yield('title')</title>

            <!-- Scripts -->
            {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
            <script src="{{ asset('js/app.js') }}" defer></script>
            <script src="{{ asset('js/assets/toast.js') }}" ></script>

            <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>

            <!-- Fonts -->
            <link rel="dns-prefetch" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

            
            <!-- toastr -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
            <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


            <!-- Styles -->
            {{-- 何故かassetsに定義されていた --}}
            <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

            <!-- ここで実装可能出ないと全ての画面で変更されない -->
            @guest
                <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
            @else
                @switch (Auth::user()->skin_id)
                @case(1)
                    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
                    @break
                @case(2)
                    <link href="{{ asset('/css/ayanami.css') }}" rel="stylesheet">
                    @break
                @case(3)
                    <link href="{{ asset('/css/shogouki.css') }}" rel="stylesheet">
                    @break
                @case(4)
                    <link href="{{ asset('/css/nerv.css') }}" rel="stylesheet">
                    @break
                @case(5)
                    <link href="{{ asset('/css/shingeki.css') }}" rel="stylesheet">
                    @break
                @case(6)
                    <link href="{{ asset('/css/akira.css') }}" rel="stylesheet">
                    @break
                @case(7)
                    <link href="{{ asset('/css/giburi.css') }}" rel="stylesheet">
                    @break

                @default
                    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
                @endswitch
            @endguest

            @yield('style')
    
        </head>
        <body class="fadeout">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                        <span id="logo-hedar"></span>
                        <span id="logo-hidden"></span>
                        <div class="container">
                                <a href="home"><div id="hedarSkin"></div></a>
                            @guest
                                <ul class="navbar-nav mr-auto" style="padding-left: 0px;">
                                    <!-- ログインリンク -->
                                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                </ul>
                                    <!-- 右サイドバー -->
                                <ul class="navbar-nav ml-auto" style="padding-left: 0px;">
                                        @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                        @endif
                                        </li>
                                    <header>
                                    <!-- ログイン前はadminをつける必要がある -->
                                        <div>
                                            <ul class="nav">
                                                <li><a href = "home">ホームページ</a></li>
                                                <li><a href = "mypage">マイページ</a></li>
                                                <li><a href = "favorite">お気に入り曲</a></li>
                                                <li><a href = "create">曲の作成</a></li>
                                                <li><a href = "cord">ギターのコード一覧</a></li>
                                            </ul>
                                        </div>
                                    </header>
                                </ul>
                            @else
                            <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                <ul class="navbar-nav mr-auto">

                                </ul>
                                <ul class="navbar-nav ml-auto" style="margin: 0px;">
                                <header>
                                    <ul class="nav">
                                        <li><a href="{{ route('admin.home') }}">ホーム</a></li>
                                        <li><a id="mypage" href = "{{ route('admin.mypage') }}" >マイページ</a></li>
                                        <li><a id="favorite" href = "{{ route('admin.favorite') }}" >お気に入り曲</a></li>
                                        <li><a id="create" href = "{{ route('admin.create') }}" >曲の作成</a></li>
                                        <li><a id="musicCords" href = "{{ route('admin.cords') }}" >ギターのコード一覧</a></li>
                                        <li><a id="musicCords" href = "{{ route('admin.record') }}" >録音</a></li>
                                    </ul>
                                </header>
                                </ul>
                            </div>
                            <nav class="navMenu">
                                <ul>
                                    <li><a href="{{ route('admin.home') }}">ホーム(公開一覧）</a></li>
                                    <li><a id="mypage" href="{{ route('admin.mypage') }}">マイページ</a></li>
                                    <li><a id="favorite" href="{{ route('admin.favorite') }}">お気に入り曲</a></li>
                                    <li><a id="create" href="{{ route('admin.create') }}">曲の作成</a></li>
                                    <li><a id="musicCords" href="{{ route('admin.cords') }}">ギターコード一覧</a></li>
                                </ul>
                            </nav>

                            <!-- メニュー -->
                            <div class="hamburgar">
                                <span class="toggle-span"></span>
                                <span></span>
                                <span></span>
                            </div>

                                                            
                            @endguest
                        </div>
                </nav>
                <main>
                    @yield('content')
                </main>
            </div>
            <script>
            @if (session('msg_info'))
                $(function() {
                    toarstr.info('{{ session('msg_info') }}');
                });
            @endif

            @if (session('msg_success'))
                $(function () {
                    toastr.success('{{ session('msg_success') }}');
                });
            @endif

            // {{--失敗時--}}
            @if (session('msg_danger'))
                $(function () {
                    toastr.danger('{{ session('msg_danger') }}');
                });
            @endif
                // 声
                @guest

                @else
                    @switch(Auth::user()->skin_id)
                        @case(1)
                        // ギターボイス
                        window.onload = function() {
                            let my_audio = new Audio("/Audio/guitarVoice1.mp3");
                        document.getElementById("hedarSkin").onclick = function() {
                            my_audio.currentTime = 0;
                            my_audio.play();
                            }    
                        }
                        @break

                        @case(2)
                        // 綾波ボイス
                        window.onload = function() {
                            let my_audio = new Audio("/Audio/ayanamiVoice1.mp3");
                        document.getElementById("hedarSkin").onclick = function() {
                            my_audio.currentTime = 0;
                            my_audio.play();
                            }    
                        }
                        @break

                        @case(3)
                        // 初号機のボイス
                        window.onload = function() {
                            let my_audio = new Audio("/Audio/shogoukiVoice.mp3");
                            let mypageSound = new Audio("/Audio/sinnziVoice1.mp3"); 
                            let createSound = new Audio("/Audio/kaworuVoice1.mp3");
                            let musicSound = new Audio("/Audio/kaworuVoice2.mp3");
                        //ボタンにクリックイベントを設定
                            document.getElementById("hedarSkin").onclick = function() {
                                my_audio.currentTime = 0;  //再生開始位置を先頭に戻す
                                my_audio.play();  //サウンドを再生
                            }
                            document.getElementById("mypage").onclick = function() {
                                mypageSound.currentTime = 0;
                                mypageSound.play();
                            }
                            document.getElementById("create").onclick = function() {
                                createSound.currentTime = 0;
                                createSound.play();
                            }
                            document.getElementById("musicCords").onclick = function() {
                                musicSound.currentTime = 0;
                                musicSound.play();
                            }
                        }
                        @break

                        @case(4)
                        // NERVボイス
                        window.onload = function() {
                            let my_audio = new Audio("/Audio/test.mp3");
                        document.getElementById("hedarSkin").onclick = function() {
                            my_audio.currentTime = 0;
                            my_audio.play();
                            }    
                        }
                        @break

                        @case(5)
                        // 進撃
                        window.onload = function() {
                            let my_audio = new Audio("/Audio/erennVoice1.mp3");
                        document.getElementById("hedarSkin").onclick = function() {
                            my_audio.currentTime = 0;
                            my_audio.play();
                            }    
                        }
                        @break

                        @case(6)
                        // AKIRAスキン
                        window.onload = function() {
                            let my_audio = new Audio("/Audio/tetuoVoice1.mp3");
                        document.getElementById("hedarSkin").onclick = function() {
                            my_audio.currentTime = 0;
                            my_audio.play();
                            }    
                        }
                        @break

                        @case(7)
                        // ジブリスキン
                        window.onload = function() {
                            let my_audio = new Audio("/Audio/inugamiVoice1.mp3");
                        document.getElementById("hedarSkin").onclick = function() {
                            my_audio.currentTime = 0;
                            my_audio.play();
                            }    
                        }
                        @break
                        
                        @default
                        window.onload = function() {
                            let my_audio = new Audio("/Audio/guitarVoice1.mp3");
                        document.getElementById("hedarSkin").onclick = function() {
                            my_audio.currentTime = 0;
                            my_audio.play();
                            }    
                        }
                    @endswitch
                @endguest
            </script>
        </body>
        @yield('js')
    </html>