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

@foreach($jobs as $job)
    <h2>{{$job['name']}}</h2>
    <h2>{{$job['description']}}</h2>
@endforeach
</body>
</html>
