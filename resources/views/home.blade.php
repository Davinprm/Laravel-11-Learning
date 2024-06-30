<x-layout>
    <div class="searchBox" for="search">
        <form style="margin: auto">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <input type="text" placeholder="Search article" id="search" name="search">
            <submit id="search" name="search">
                <i id="search" name="search" class="fas fa-solid fa-magnifying-glass"></i>
            </submit>
        </form>
    </div>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- first var is array that will be send from d route, second param is our var --}}
    @forelse ($posts as $post)
        <article class="{{ $post->category->color }}">      
            <div class="contentTitle">
                <div class="title">
                    <a href="/article/{{ $post['slug'] }}">{{ $post['slug'] }}</a>
                    <a style="font-size: small;color: rgb(77, 77, 77);" href="/?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </div>
                <div class="author">
                    <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                </div>
            </div>
            <div class="contentArticle">
                <a href="/article/{{ $post['slug'] }}">
                    <p>{{ Str::limit($post['article'], 100) }}</p>
                </a>
                <a href="/article/{{ $post['slug'] }}" class="readMore">Read more</a>
            </div>        
        </article>
    @empty
    <p style="margin-top: 12.5rem">Article not found.</p>
    @endforelse
</x-layout>