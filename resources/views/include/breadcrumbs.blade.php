<ol>
    <li>
        <a href="/">Home</a>
    </li>

    @if (!isset($title))
        <li>
            <a href=" {{ route('article.index') }}">Article</a>
        </li>
    @endif

</ol>
<h2>
    @if (isset($title))
        {{ $title }}
    @elseif(isset($post->title) )
        {{ $post->title }}
    @endif
</h2>


