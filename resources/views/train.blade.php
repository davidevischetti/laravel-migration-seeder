<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageName}}</title>
</head>
<body>

    @foreach ($trains as $train)
        <ul>
            <li>{{$train->codice_treno}}</li>
            <li>{{$train->stazione_partenza}}</li>
            <li>{{$train->orario_partenza}}</li>
        </ul>
    @endforeach

</body>
</html>
