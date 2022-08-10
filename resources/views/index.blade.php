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
       <div class="container1">
        <div class="form">
            <form action="">
                <h2 class="title3">Prennez RendezVous</h2>
                <ul class="ule">
                    <li class="lii"><input type="text" name="nom" id="" placeholder="Nom..."></li>
                    <li class="lii"><input type="text" name="mail" id="" placeholder="Email..."></li>
                    <li class="lii"><input type="text" name="telephone" id="" placeholder="Telephone..."></li>
                    <li class="lii"><input type="text" name="date" id="" placeholder="Date..."></li>
                    <li class="lii"><input type="text" name="heure" id="" placeholder="Heure..."></li>
                    <li class="lii"><select name="service" id="">
                        <option value="">--Service--</option>   
                        <option value="">Manicure</option>   
                        <option value="">Pedicure</option>   
                    </select></li>
                </ul>
            </form>
        </div>
        <div class="box">
            <h2 class="title4">Bienvenue a BantuBwoy Saloon</h2>
            <p class="para1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum similique doloremque veritatis, dolor nostrum delectus? Laborum ex ad maxime, molestias, sint reprehenderit ea cumque exercitationem et non quidem possimus asperiores!</p>
        </div>
       </div>
    </section>
    <section class="recent">
        <h1 class="title5">Coiffure Recentes</h1>
        <div class='FlexContainer'>
            <div>
                <img src="{{ url('/img/2.png') }}" alt="image non disponible">
            </div>
            <div>
                <img src="{{ url('/img/2.png') }}" alt="image non disponible">
            </div>
            <div>
                <img src="{{ url('/img/2.png') }}" alt="image non disponible">
            </div>
            <div>
                <img src="{{ url('/img/2.png') }}" alt="image non disponible">
            </div>
            <div>
                <img src="{{ url('/img/2.png') }}" alt="image non disponible">
            </div>
            <div>
                <img src="{{ url('/img/2.png') }}" alt="image non disponible">
            </div>
        </div>
    </section>
</body>
</html>