<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('frontend/css/propos.css')}}">
    <title>A Propos</title>
</head>
<body>
    @include('layouts.menu')
    <section class="homepage">
        <h2 class="title">
            <a href="{{ url('/') }}" class="link1">Accueil</a>><a href="#" class="link2">A Propos</a>
        </h2>
    </section>
    <section class="section1">
        <div class="container">
            <div class="img-box">
                    <img src="{{ url('/img/ma.jpeg') }}" alt="image non disponible" class="img1">
            </div>
            <div class="txt-box">
                <h1 class="title2">Modes Parfaites</h1>
                <p class="para">Notre objectif principal est la qualité et l'hygiène. Notre salon est bien équipé avec des équipements de technologie de pointe et fournit les meilleurs services de qualité. Notre personnel est bien formé et expérimenté, offrant des services avancés de modelage de la peau, des cheveux et du corps qui vous offriront une expérience luxueuse qui vous laissera détendu et sans stress.</p>
                <button class="btnlearn">En Savoir Plus</button>
            </div>
        </div>
    </section>
</body>
</html>