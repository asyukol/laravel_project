
<html>
    <body>
        <div class="container">
            <div class="row">
                @foreach ($users as $user)
                    {{$user->id}} {{$user->name}} {{$user->email}} {{$user->password}}
                    <br><br>
                @endforeach
            </div>
        </div>
    </body>
</html>
