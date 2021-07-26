<html>
<head>
    <style>
        .content {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

    </style>
</head>
    <body>
        <div class="content9">
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
