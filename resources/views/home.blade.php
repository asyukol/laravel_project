
<html>
    <body>
        <div>
            @php
                $user=Session::get('user');
                $role=Session::get('role');
            @endphp
            @if ($user!=null)
                <p>Текущая учетная запись:  {{$user}}</p>
                <br><br>
                <p>Роль: {{$role}}</p>
                <form method="POST" action="/home">
                    @csrf
                    <button type="submit">Выйти</button>
                </form>
                @if ($role=='admin')
                    <form method="GET" action="/admin">
                        @csrf
                        <button type="submit">Админка</button>
                    </form>
                @endif
            @endif
            @if (is_null($user))
                <form method="GET" action="/login">
                    @csrf
                    <button type="submit">Войти</button>
                </form>
            @endif
            <form method="GET" action="/register">
                @csrf
                <button type="submit">Создать учетную запись</button>
            </form>
            <form method="GET" action="/news">
                @csrf
                <button type="submit">Новости</button>
            </form>
        </div>
    </body>
</html>
