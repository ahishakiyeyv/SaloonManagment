<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('frontend/css/service.css')}}">
    <title>Service BBS</title>
</head>
<body>
    @include('layouts.menu')
    <section class="services">
        <h3 class="title">
            <a href="{{ url('/') }}" class="link">Accueil</a> > <a href="#" class="linke">Service</a>
        </h3>
    </section>
    <section class="list">
        <h1 class="title1">Liste des Services</h1>
    </section>
</body>
</html>