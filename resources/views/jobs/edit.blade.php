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
<form action="/jobs/{{$job['id']}}" method="post">
    @csrf
     @method('Put')
    <label>
        name: <input type="text" name="name" value="{{$job['name']}}">
        @error('name')
        <p>{{$message}}</p>
        @enderror

    </label>

    <label>
        description:<input type="text" name="description" value="{{$job['description']}}">
        @error('description')
        <p>{{$message}}</p>
        @enderror

    </label>



    <button>change</button>
</form>


<form method="post" action="/jobs/{{$job['id']}}">
    @csrf
    @method('DELETE')
    <button>Delete</button>
</form>
</body>
</html>
