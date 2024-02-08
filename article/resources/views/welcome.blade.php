{{-- @extends('layouts.app')
@section('content')
<div>
    @auth
    <a href="{{ route('home') }}">マイページ</a>
    <a href="{{ route('articles.index') }}">投稿を見る</a>
    @else
    @endauth
</div>
@endsection() --}}

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/main.css">
    <title>Document</title>
</head>
<body>
    <header class="header_visual">
        <a class="main_a" href="/">記事投稿アプリ</a>
        <nav>
            <ul class="menu">
                @if (Auth::check())
                <li><a class="tab_item{{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">マイページ</a></li>
                <li><a class="tac_item{{ Request::is('articles') ? 'active' : '' }}" href="{{ route('articles.index') }}">記事検索</a></li>
                <li><a class="tab_item{{ Request::is('bookmarks') ? 'active' : '' }}" href="{{ route('bookmarks') }}">ブックマーク</a></li>
                <li>
                    <form onsubmit="return confirm('ログアウトしますか？')" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">ログアウト</button>
                    </form>
                </li>        
                @else
                <li><a href="{{ route('login') }}">ログイン</a></li>
                <li><a href="{{ route('register') }}">会員登録</a></li>
                @endif
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>