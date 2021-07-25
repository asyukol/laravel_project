<html>
    <body>
        <div>
            <form method="POST" action="/news/add">
                @csrf
                <input name="title" placeholder="Заголовок">
                <br><br>
                <input name="contents" placeholder="Текст">
                <br><br>
                <button type="submit">Сохранить</button>
            </form>
        </div>
    </body>
</html>
