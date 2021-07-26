<html>
    <body>
        <div class="container">

            <div class="row">
                    @foreach($post as $p)
                    <h1>{{$p->title}}</h1> <p>{{$p->author}}  {{$p->date}}</p><p> {{$p->contents}}</p>
                    <p>{{$p->views}} просмотров</p>
                    @endforeach
            </div>
            <br><br>
            <h3>Комментарии</h3>

            @foreach ($comments as $comment)

                <p> {{$comment->author}} {{$comment->date}}</p>
                <p>{{$comment->text}}</p>

            @endforeach

            @if(Session::get('user')!=null)
                <form method="POST" action="/news/comment">
                    @csrf
                    <input name="text" placeholder="Комментарий">
                    <br><br>
                    <button type="submit">Отправить</button>
                </form>
            @endif

        </div>
    </body>
</html>
