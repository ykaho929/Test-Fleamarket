<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleamarket</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    COACHTECH
                </a>
                <nav>
                    <ul class="header-nav">
                        <li class="header-nav__item">
                            <!-- 後で検索ボックス追加 -->
                            <input type="submit" value="なにをお探しですか？">
                            </form>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="/mypage">マイページ</a>
                        </li>
                        <li class="header-nav__item">
                            @auth
                            <form class="form" action="/logout" method="post">
                                @csrf
                                <button class="header-nav__button">ログアウト</button>
                            </form>
                            @else
                            <a class="header-nav__link" href="/login">ログイン</a>
                            @endauth
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="/sell">出品</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    
</body>

</html>