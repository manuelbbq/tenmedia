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
<h1>Jobs</h1>
@foreach($jobs as $job)
    <div>
        <h2>Title: {{$job['name']}}</h2>
        <h2>Description: {{$job['description']}}</h2>
        <h2>Company: {{$job->company['name']}}</h2>
        <form action="/jobs/{{$job['id']}}" method="get">
            <button>Edit</button>
            <a href="/jobs/{{$job['id']}}">Show</a>
        </form>
    </div>
@endforeach
</body>
</html>
