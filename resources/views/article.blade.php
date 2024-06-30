<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
        <article class="{{ $post->category->color }}">      
            <div class="contentTitle">
                <div class="title">
                    <p>{{ $post['slug'] }}</p>
                    <a style="font-size: small;color: rgb(77, 77, 77);" href="/?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </div>
                <div class="author">
                    <a href="/?authors={{ $post->author->username }}" >{{ $post->author->name }}</a>
                    <time>{{ $post['created_at']->diffForHumans() }}</time>
                </div>
            </div>
            <div class="contentArticle flexbasis">
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