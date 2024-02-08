@csrf
<div class="create">
    <dl class="create_dl">
        <dt>タイトル</dt>
        <dd><input class="create_title" type="text" name="title" value="{{ old('title', $article->title) }}"></dd>
        <dt>本文</dt>
        <dd><textarea class="create_text" name="body" rows="5">{{ old('body', $article->body) }}</textarea></dd>
    </dl>
</div>
