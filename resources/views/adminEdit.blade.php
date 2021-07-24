<html>
    <body>
        <div>
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
