@foreach ($articles as $article)
<article>
    <div><a href="{{ route('articles.show', $article) }}">{{ $article->tirle }}</a></div>
    <div>
        {{ $article->created_at }} | {{ $article->user->name }}
    </div>
    <div>
        @if (!Auth::user()->is_bookmark($article->id))
        <form action="{{ route('bookmark.store', $article) }}" method="POST">
            @csrf
            <button>お気に入り登録</button>
        </form>
        @else
        <form action="{{ route('bookmark.destroy', $article) }}" method="POST">
            @csrf
            @method('delete')
            <button>お気に入り解除</button>
        </form>
        @endif
    </div>
</article>
@endforeach
{{ $articles->links() }}