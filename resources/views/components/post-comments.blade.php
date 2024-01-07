@props(['comment'])
<article class="flex bg-gray-100 p-6 border border-gray-200 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/100?u={{ $comment->id }}" alt="" width="60px" class="rounded-xl" />
    </div>
    <div>
        <header class="mb-4">
            <h3>
                {{ $comment->author->username }}
            </h3>
            <p>Posted <time>{{ $comment->created_at }}</time></p>
        </header>
        <p>
            {{ $comment->body }}
        </p>
    </div>
</article>
