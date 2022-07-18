<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create user</title>
</head>
<body>
<form action="/users/store" method="post">
    @csrf
    <label>
        name: <input type="text" name="name">
        @error('name')
        <p>{{$message}}</p>
        @enderror

    </label>

    <label>
        email:<input type="email" name="email">
        @error('email')
        <p>{{$message}}</p>
        @enderror

    </label>
    <label>
        password: <input type="password" name="password">
        @error('password')
        <p>{{$message}}</p>
        @enderror

    </label>
    <label>
        password:<input type="password" name="password2">
        @error('password2')
        <p>{{$message}}</p>
        @enderror

    </label>
    <button>create</button>
</form>
</body>
</html>
