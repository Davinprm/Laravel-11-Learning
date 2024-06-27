<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
        <article>      
            <div class="contentTitle">
                <div>
                    <p>{{ $post['slug'] }}</p>
                </div>
                <div class="author">
                    <a href="/authors/{{ $post->author->id }}" >{{ $post->author->name }}</a>
                    <time>{{ $post['created_at']->diffForHumans() }}</time>
                </div>
            </div>
            <div class="contentArticle">
                <div>
                    <p>{{ $post['article'] }}</p>
                </div>
                <div class="link">
                    <a href="/article/{{ $post['slug'] }}" class="readMore">Back</a>
                    <a href="/article/{{ $post['slug'] }}" class="readMore">Next</a>
                </div>
            </div>
        </article>
</x-layout>