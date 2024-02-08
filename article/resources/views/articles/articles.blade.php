@foreach ($articles as $article)
<article>
    <div class="article_title"><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a></div>
    <div>
        投稿者：{{ $article->user->name }} | 投稿日時：{{ $article->created_at }}
    </div>
    <div class="article_item">
        @if (!Auth::user()->is_bookmark($article->id))
        <form action="{{ route('bookmark.store', $article) }}" method="POST">
            @csrf
            {{-- <button class="fav_button">お気に入り登録</button> --}}
            <button class="c-button">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="25" height="25" viewBox="0 0 1280.000000 1226.000000"
                preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,1226.000000) scale(0.100000,-0.100000)"
                fill="#bfbfbf" stroke="none">
                <path d="M5195 10348 c-499 -1052 -911 -1917 -915 -1921 -7 -8 -987 -167
                -3670 -597 -311 -49 -575 -92 -587 -95 l-23 -5 0 -233 0 -232 922 -870 c1867
                -1764 2103 -1987 2109 -1999 4 -6 -6 -90 -21 -186 -16 -96 -78 -494 -139 -885
                -61 -390 -167 -1072 -236 -1515 -69 -443 -159 -1021 -200 -1285 -41 -264 -76
                -490 -78 -502 l-4 -23 264 0 c245 0 266 1 291 19 26 19 3568 1951 3576 1951 4
                0 3666 -1853 3817 -1931 l76 -40 160 3 159 3 -418 2230 c-230 1227 -417 2240
                -415 2251 1 14 555 578 1470 1497 l1467 1475 0 234 0 234 -137 17 c-76 9 -329
                42 -563 72 -234 31 -839 109 -1345 175 -506 66 -1095 142 -1310 170 -214 28
                -514 67 -665 86 -222 29 -278 39 -290 53 -8 10 -447 860 -974 1889 l-960 1872
                -226 0 -227 0 -908 -1912z"/>
                </g>
                </svg>
        </form>
        @else
        <form action="{{ route('bookmark.destroy', $article) }}" method="POST">
            @csrf
            @method('delete')
            <button class="c-button">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="25" height="25" viewBox="0 0 1280.000000 1226.000000"
                preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,1226.000000) scale(0.100000,-0.100000)"
                fill="#ffdc00" stroke="none">
                <path d="M5195 10348 c-499 -1052 -911 -1917 -915 -1921 -7 -8 -987 -167
                -3670 -597 -311 -49 -575 -92 -587 -95 l-23 -5 0 -233 0 -232 922 -870 c1867
                -1764 2103 -1987 2109 -1999 4 -6 -6 -90 -21 -186 -16 -96 -78 -494 -139 -885
                -61 -390 -167 -1072 -236 -1515 -69 -443 -159 -1021 -200 -1285 -41 -264 -76
                -490 -78 -502 l-4 -23 264 0 c245 0 266 1 291 19 26 19 3568 1951 3576 1951 4
                0 3666 -1853 3817 -1931 l76 -40 160 3 159 3 -418 2230 c-230 1227 -417 2240
                -415 2251 1 14 555 578 1470 1497 l1467 1475 0 234 0 234 -137 17 c-76 9 -329
                42 -563 72 -234 31 -839 109 -1345 175 -506 66 -1095 142 -1310 170 -214 28
                -514 67 -665 86 -222 29 -278 39 -290 53 -8 10 -447 860 -974 1889 l-960 1872
                -226 0 -227 0 -908 -1912z"/>
                </g>
                </svg>
        </form>
        @endif
    </div>
    
</article>
@endforeach
{{ $articles->links() }}