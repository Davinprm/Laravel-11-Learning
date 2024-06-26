<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
        <article>      
            <div class="contentTitle">
                <div>
                    <p>{{ $post['slug'] }}</p>
                </div>
                <div class="author">
                    <a href="#" >{{ $post['author'] }}</a>
                    <time datetime="{{ $post['created_at'] }}</time>
                </div>">{{ $post['created_at']->diffForHumans() }}</time>
                </div>
            </div>
            <div class="contentArticle">
                <p>{{ $post['article'] }}</p>
                <div class="link">
                    <a href="/article/{{ $post['slug'] }}" class="readMore">Back</a>
                    <a href="/article/{{ $post['slug'] }}" class="readMore">Next</a>
                </div>
            </div>
        </article>
</x-layout>