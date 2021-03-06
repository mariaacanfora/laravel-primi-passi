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
    @php
        $hour = "ora solare";
            if (date("I")) {
                $hour = "ora legale";
            }
    @endphp


    <header class="container">
        <div class="text-center my-5">
            <h1>Ciao Mondo!</h1>
            <h3>Oggi è {{ $today }}</h3>
            <h3>e sono le ore {{$now}} UTC ({{$hour}}) di un anno 
                @if($leap_year)
                    bisesitle!
                    @else
                    non bisestile!
                @endif
            </h3>
        </div>

        <nav class="navbar-light text-center pt-5 border-top">
            <button class="btn btn-sm btn-outline-secondary mx-3" type="button"><a href="/english" class="text-dark text-decoration-none">English</a></button>
            <button class="btn btn-sm btn-outline-secondary mx-3" type="button"><a href="/spanish" class="text-dark text-decoration-none">Spanish</a></button>
            <button class="btn btn-sm btn-outline-secondary mx-3" type="button"><a href="/francais" class="text-dark text-decoration-none">Français</a></button>
        </nav>
    </header>
</body>
</html>