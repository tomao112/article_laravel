@extends('layouts.app')
@section('content')
<div>
    <h1>記事投稿アプリ</h1>
    @auth
    <a href="{{ route('home') }}">マイページ</a>
    <a href="{{ route('articles.index') }}">投稿を見る</a>
    @else
    <a href="{{ route('register') }}">会員登録</a>
    <a href="{{ route('login') }}">ログイン</a>
    @endauth
</div>
@endsection()