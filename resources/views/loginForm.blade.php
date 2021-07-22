<html>
    <body>
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
