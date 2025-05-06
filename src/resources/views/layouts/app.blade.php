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
            <div class="header__nav-serch">
                <div class="nav-serch-input">               
                    <input type="submit" value="なにをお探しですか？">
                </div>
            </div>
            <div class="header__nav-menu">
                <ul class="header__nav-items">
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="/mypage">マイページ</a>
                        </li>
                        <li class="header__nav-item">
                            @auth
                            <form class="form" action="/logout" method="post">
                                @csrf
                                <button class="header__nav-link">ログアウト</button>
                            </form>
                            @else
                            <a class="header__nav-link" href="/login">ログイン</a>
                            @endauth
                        </li>
                        <li class="header__nav-item">
                            <a class="header__nav-btn" href="/sell">出品</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    
</body>

</html>