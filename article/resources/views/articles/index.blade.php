@extends('layouts.app')
@section('content')

<p><a href="{{ route('articles.create') }}">記事を書く</a></p>
@foreach ($articles as $article)
<article>
    <div>
        <a href="{{ route('articles.show', $article) }}">{{ $article->title}}</a>
    </div>
    <div>{{ $article->created_at}}</div>
</article>
@endforeach
@endsection()
