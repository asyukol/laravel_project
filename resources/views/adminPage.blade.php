
<html>
    <body>
        <div class="container">
            <form method="GET" action="/admin/editUser">
                @csrf
                <button type="submit">Изменить пароль пользователя</button>
            </form>
            <form method="GET" action="/admin/deleteUser">
                @csrf
                <button type="submit">Удалить пользователя</button>
            </form>
            <div class="row">
                @foreach ($users as $user)
                    {{$user->id}} {{$user->name}} {{$user->email}} {{$user->password}}
                    <br><br>
                @endforeach
            </div>
        </div>
    </body>
</html>
