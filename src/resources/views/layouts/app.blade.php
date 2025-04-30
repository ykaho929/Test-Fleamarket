<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleamarket</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a href="/"><img src="{{ asset('img/logo.svg') }}" alt="ロゴ" ></a>
            </div>
            <ul class="header__navs">
                <div class="header__nav-serch">                      
                    <input type="submit" value="なにをお探しですか？">
                            </form>
                    </li>
                </div>
                <div class="header__nav-items">
                    <li clss="header__nav-item">                        
                        <a class="header-nav__link" href="/mypage">マイページ</a>
                    </li>
                    <li class="header__nav-item">
                        @auth
                        <form class="form" action="/logout" method="post">
                            @csrf
                            <button class="header-nav__button">ログアウト</button>
                        </form>
                        @else
                        <a class="header-nav__link" href="/login">ログイン</a>
                        @endauth
                    </li>
                    <li class="header__nav-item">
                        <a class="header-nav__link" href="/sell">出品</a>
                    </li>
                </div>
            </ul>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    
</body>

</html>