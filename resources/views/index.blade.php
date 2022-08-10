<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('frontend/css/home.css')}}">
    <title>Salon de Coiffure</title>
</head>
<body>
    @include('layouts.menu')
    <section class="home">
        <div class="container">
            <div class="content1">
                <h5 class="tle">Beauty Parlour</h5>
                <h1 class="title0">BEST HAIRCUT OF THE SEASONS</h1>
                <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsa vel autem et dolor illum ipsum temporibus totam provident porro earum facilis, itaque voluptas nisi corporis a, enim quae? Nobis?</p>
            </div>
            <div class="content2">
                <img src="{{ url('/img/12.png') }}" alt="images non disponible" class="img">
            </div>
        </div>
    </section>
    <section class="appoint">
        <div class="form">
            <h1 class="title1">Prennez le RendezVous</h1>
            <form action="">
                <input type="text" name="nom" id="">

            </form>
        </div>
    </section>
</body>
</html>