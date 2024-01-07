@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" width="60px" class="rounded-full" />
                <h2 class="ml-4">Want to Participate</h2>
            </header>
            <div class="ml-6">
                <textarea name="body" rows="5" class="w-full text-small focus:outline-none focus:ring"
                    placeholder="Quick, thing of something to say!" required></textarea>
                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end border-top mt-6 pt-6 border-gray-200 pt-600">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or <a class="hover:underline" href="/login">Login</a> to
        leave a comment.
    </p>
@endauth
