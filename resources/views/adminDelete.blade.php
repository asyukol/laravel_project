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
        <div class="content">
            <form method="POST" action="/admin/deleteUser">
                @csrf
                <input name="id" placeholder="ID пользователя">
                <button type="submit">Удалить</button>
            </form>
        </div>
    </body>
</html>
