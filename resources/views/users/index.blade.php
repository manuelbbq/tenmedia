<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>User</h1>

@foreach($users as $user)
    <a href="/users/{{$user['id']}}">{{$user['name']}}</a>
    <h2>{{$user['email']}}</h2>
    <a href="/users/delete/{{$user['id']}}">delete</a>
    <a href="/users/update/{{$user['id']}}">change</a>
    <br>

@endforeach
<a href="/users/newuser/">New user</a>
</body>
</html>