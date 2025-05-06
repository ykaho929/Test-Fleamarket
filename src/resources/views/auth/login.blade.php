<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleamarket</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">                
                <a href="/"><img src="{{ asset('img/logo.svg') }}" alt="ロゴ" ></a>
            </div>
        </div>
    </header>

    <div class="login__content">
        <div class="login-form__heading">
            ログイン
        </div>
        <form class="form" action="/login" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                </div>
                <div class="form__group-content">
                    <div class="form__group-input">
                        <input typeform__input--text="email" name="email" value="{{ old('email') }}" />
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">パスワード</span>
                </div>
                <div class="form__group-content">
                    <div class="form__group-input">
                        <input type="password" name="password" />
                    </div>
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">ログインする</button>
        </div>
        </form>
        <div class="register__link">
            <a class="register__button-submit" href="/register">会員登録の方はこちら</a>
        </div>
    </div>
</body>

</html>