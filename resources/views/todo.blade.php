<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        ul{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            list-style-type: none;
        }
    </style>
    <title>Todos</title>
</head>
<body>
<section>
    @foreach($data as $key => $value)
        <ul>
            <li>{{$value['id']}}</li>
            <li>{{$value['name']}}</li>
            <li>{{$value['priority']}}</li>
            <li>{{$value['done']}}</li>
        </ul>
    @endforeach
</section>
<section>
    <form action="/todos" method="post">
        @csrf
    <ul>
        <li><input name="name" type="text"></li>
        <li><input name="priority" type="text"></li>
        <button type="submit">Speichern</button>
    </ul>
    </form>
</section>
</body>
</html>

