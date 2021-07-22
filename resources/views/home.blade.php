
<html>
    <body>
        <div>
            @php
                $user=Session::get('user');
            @endphp
            @if ($user!=null)
                <p>Текущая учетная запись:  {{$user}}</p>
                <br><br>
                <form method="POST" action="/home">
                    @csrf
                    <button type="submit">Выйти</button>
                </form>
            @endif
            @if (is_null($user))
                <form method="GET" action="/login">
                    @csrf
                    <button type="submit">Войти</button>
                </form>
            @endif

        </div>
    </body>
</html>
