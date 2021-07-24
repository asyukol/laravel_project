<html>
    <body>
        <div>
            <form method="POST" action="/admin/deleteUser">
                @csrf
                <input name="id" placeholder="ID пользователя">
                <button type="submit">Удалить</button>
            </form>
        </div>
    </body>
</html>
