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
<form action="/jobs/store" method="post">
    @csrf
    <label>
        name: <input type="text" name="name">
        @error('name')
        <p>{{$message}}</p>
        @enderror

    </label>

    <label>
        description:<input type="text" name="description">
        @error('description')
        <p>{{$message}}</p>
        @enderror

    </label>
    <label hidden>
        Company_id: <input hidden type="number" name="company_id" value="{{$id}}">
        @error('company_id')
        <p>{{$message}}</p>
        @enderror
    </label>
    <label hidden>
        Company_id: <input hidden type="number" name="user_id" value="{{auth()->user()['id']}}">
        @error('user_id')
        <p>{{$message}}</p>
        @enderror
    </label>

    <button>create</button>
</form>
</body>
</html>
