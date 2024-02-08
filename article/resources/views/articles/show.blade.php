@extends('layouts.app')
@section('content')

    <article>
        <h1>{{ $article->title }}</h1>
        <div>{{ $article->created_at }}</div>
        <div>{!! nl2br(e($article->body)) !!}</div>
        @can('update', $article)
        <div>
            <a href="{{ route('articles.edit', $article) }}">編集</a>
            <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('articles.destroy', $article) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">削除</button>
            </form>
        </div>
        @endcan
    </article>
    
@endsection