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
<div>
    <h2>Title: {{$jobs['name']}}</h2>
    <h2>Description: {{$jobs['description']}}</h2>
    <h2>Company: {{$jobs->company['name']}}</h2>
    <h2>User: {{$jobs->user['name']}}</h2>
</div>
<a href="/jobs/destroy/{{$jobs['id']}}">Delete</a>
<a href="/jobs/edit/{{$jobs['id']}}">Edit</a>
</body>
</html>
