<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saints</title>
</head>

<body>

    <h1>
        Saints
    </h1>

    <ul>
        @foreach ($saints as $saint)
            <li>
                {{ $saint['name'] }} from {{$saint['birthPlace']}}
            </li>
        @endforeach
    </ul>
</body>

</html>
