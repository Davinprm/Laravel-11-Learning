<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- first var is array that will be send from d route, second param is our var --}}
    @foreach ($posts as $post)
        <article>      
            <div class="contentTitle">
                <a href="/article/{{ $post['slug'] }}">
                    <div>
                        <p>{{ $post['title'] }}</p>
                    </div>
                </a>
                <div class="author">
                    <a href="#">{{ $post['author'] }}</a>
                </div>
            </div>
            <div class="contentArticle">
                <a href="/article/{{ $post['slug'] }}">
                    <p>{{ Str::limit($post['article'], 100) }}</p>
                </a>
                <a href="/article/{{ $post['slug'] }}" class="readMore">Read more</a>
            </div>        
        </article>
    @endforeach
</x-layout>