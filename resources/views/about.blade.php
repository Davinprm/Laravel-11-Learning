<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article>
        <div class="contentTitle">
            <div>
                <p>About Me</p>
            </div>  
        </div>      
        <div class="contentArticle">
            <p>
                Name: {{ $name }} <br>
                Email: {{ $email }} <br>
                GitHub: <a href="https://github.com/Davinprm" style="text-decoration:underline;">Davinprm</a>
            </p>
        </div>
    </article>
</x-layout>

</body>
</html>