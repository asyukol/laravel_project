<html>
    <body>
        <div class="container">

            <div class="row">
                    @foreach($post as $p)
                        {{$p->title}} {{$p->author}} {{$p->views}} {{$p->date}} {{$p->contents}}
                    @endforeach
            </div>
            <br><br>
            <h3>Комментарии</h3>

            @foreach ($comments as $comment)

                {{$comment->author}} {{$comment->date}} {{$comment->text}}
                <br><br>
            @endforeach

            @if(Session::get('user')!=null)
                <form method="POST" action="/news/comment">
                    @csrf
                    <input name="text" placeholder="Комментарий">
                    <br><br>
                    <button type="submit">Сохранить</button>
                </form>
            @endif

        </div>
    </body>
</html>
