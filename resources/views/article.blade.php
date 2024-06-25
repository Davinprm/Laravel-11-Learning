<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
        <article>      
            <div class="contentTitle">
                <div>
                    <p>{{ $post['title'] }}</p>
                </div>
                <div class="author">
                    <a href="#" >{{ $post['author'] }}</a>
                    <time datetime="2024-06-25T14:30:00">Jun 25 2024</time>
                </div>
            </div>
            <div class="contentArticle">
                <p>{{ $post['article'] }}</p>
                <div class="link">
                    <a href="/article/{{ --$post['slug'] }}" class="readMore">Back</a>
                    <a href="/article/{{ ++$post['slug'] }}" class="readMore">Next</a>
                </div>
            </div>
        </article>
</x-layout>