
<html>
    <body>
        <div class="container">
            <form method="POST" action="news">
                @csrf
                <button type="submit">Добавить новость</button>
            </form>
            <div class="row">
                @foreach ($news as $newsPost)

                    <a href="news/{{$newsPost->title}}"><h3>{{$newsPost->title}}</h3> </a> <p>{{$newsPost->author}} {{$newsPost->date}}</p> <p>{{$newsPost->contents}}</p>
                    <p>{{$newsPost->views}} просмотров</p>
                    <br><br>
                @endforeach
            </div>
        </div>
    </body>
</html>
