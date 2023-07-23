<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>ARRAY HELPERS </h3>
    <p>{{$msgm}}</p>
<div>
    <button type="button" onclick="window.location='{{ url("app/") }}'">não utilizando Helper</button>
    <button type="button" onclick="window.location='{{ url("app/create") }}'">utilizando Helper</button>
</div>
<div>
    <button type="button" onclick="window.location='{{ url("app/1") }}'">não utilizando Helper</button>
    <button type="button" onclick="window.location='{{ url("app/2/") }}'">utilizando Helper</button>
</div>

</body>
</html>
