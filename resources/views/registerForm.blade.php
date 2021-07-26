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
            <form method="POST" action="register">
                @csrf
                <input name="name" placeholder="Имя">
                <br><br>
                <input name="email" placeholder="Почта">
                <br><br>
                <input name="role" placeholder="Роль">
                <br><br>
                <input name="password" placeholder="Пароль">
                <br><br>
                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </body>
</html>
