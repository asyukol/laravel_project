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
    <body class="content">
        <div>
            <form method="POST" action="login">
                @csrf

                <input name="email" placeholder="Почта">
                <br><br>

                <input name="password" placeholder="Пароль">
                <br><br>
                <button type="submit">Войти</button>
            </form>
        </div>
    </body>
</html>
