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
            <form method="POST" action="/admin/editUser">
                @csrf
                <input name="id" placeholder="ID пользователя">
                <br><br>
                <input name="password" placeholder="Новый пароль">
                <br><br>
                <button type="submit">Подтвердить</button>
            </form>
        </div>
    </body>
</html>
