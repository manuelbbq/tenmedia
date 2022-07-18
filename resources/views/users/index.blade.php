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
    <div>
        <p>Name: <a href="/users/{{$user['id']}}">{{$user['name']}}</a></p>
        <p>email: {{$user['email']}}</p>
        <a href="/users/destroy/{{$user['id']}}">Delete</a>
        <a href="/users/edit/{{$user['id']}}">change</a>
    </div>
@endforeach
<a href="/users/create/">New user</a>
</body>
</html>
