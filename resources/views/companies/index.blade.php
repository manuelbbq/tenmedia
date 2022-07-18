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
<h1>Companys</h1>

@foreach($companies as $company)
    <div>
        <p>Name: <a href="/companies/show/{{$company['id']}}">{{$company['name']}}</a></p>
        <p>{{$company['email']}}</p>
        <p>{{$company['website']}}</p>
    </div>
    <a href="/companies/edit/{{$company['id']}}">Edit</a>
@endforeach
<a href="/companies/create/">New Company</a>
</body>
</html>
