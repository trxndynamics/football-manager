<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        {{ Form::open(['route'=>'users.store']) }}
            <div>
                {{ Form::label('email', 'Email:') }}
                {{ Form::email('email') }}
            </div>

            <div>
                {{ Form::label('username', 'Username:') }}
                {{ Form::text('username') }}
            </div>

            <div>
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password') }}
            </div>

            <div>
                {{ Form::submit('Register') }}
            </div>
        {{ Form::close() }}
    </body>
</html>
