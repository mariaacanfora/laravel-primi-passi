<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - primi passi </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Hello World!</h1>
        <h3>Oggi è {{ $today }}</h3>
        <h3>e sono le ore {{$now}} di un anno 
        @if($leap_year)
            bisesitle!
            @else
            non bisestile!
        @endif
        </h3>
    </div>
</body>
</html>