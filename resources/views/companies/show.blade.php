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
<h1>{{$company['id']}}</h1>
<h1>{{$company['name']}}</h1>
<h1>{{$company['email']}}</h1>
<h1>{{$company['website']}}</h1>
<p>Users</p>
<ul>
    @foreach($company->users as $user)
        <li><a href="/users/{{$user['id']}}">{{$user['name']}}</a></li>
    @endforeach
</ul>
<br>
<p>Jobs</p>
<ul>
    @foreach($company->jobs as $job)
        <li><a href="/jobs/show/{{$job['id']}}">{{$job['name']}}</a></li>
    @endforeach
</ul>
<a href="/jobs/create/{{$company['id']}}">new Job</a>


</body>
</html>
