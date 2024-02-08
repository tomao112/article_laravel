@extends('layouts.app')
@section('content')
@include('commons.errors')

<form action="{{ route('articles.store') }}" method="POST">
    @include('articles.form')
    <button class="create_button" type="submit">投稿する</button>
    <a class="create_a" href="{{ route('articles.index') }}">キャンセル</a>
</form>
@endsection