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
<form action="/jobs/update/{{$jobs['id']}}" method="post">
    @csrf
    <label>
        name: <input type="text" name="name" value="{{$jobs['name']}}">
        @error('name')
        <p>{{$message}}</p>
        @enderror

    </label>

    <label>
        description:<input type="text" name="description" value="{{$jobs['description']}}">
        @error('description')
        <p>{{$message}}</p>
        @enderror

    </label>



    <button>change</button>
</form>
<a href="/jobs/destroy/{{$jobs['id']}}">Delete</a>
</body>
</html>
