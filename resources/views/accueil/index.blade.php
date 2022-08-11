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
                <p class="para">Notre objectif principal est la qualité et l'hygiène. Notre salon est bien équipé avec des équipements de technologie de pointe et fournit les meilleurs services de qualité. Notre personnel est bien formé et expérimenté, offrant des services avancés de modelage de la peau, des cheveux et du corps qui vous offriront une expérience luxueuse qui vous laissera détendu et sans stress. </p>
            </div>
            <div class="content2">
                <img src="{{ url('/img/3.png') }}" alt="images non disponible" class="img">
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
                    <li class="lii"><button class="btn-contact">Submit</button></li>
                </ul>
            </form>
        </div>
        <div class="box">
            <h2 class="title4">Bienvenue a BantuBwoy Saloon</h2>
            <p class="para1">Notre objectif principal est la qualité et l'hygiène. Notre salon est bien équipé avec des équipements de technologie de pointe et fournit les meilleurs services de qualité. Notre personnel est bien formé et expérimenté, offrant des services avancés de modelage de la peau, des cheveux et du corps qui vous offriront une expérience luxueuse qui vous laissera détendu et sans stress. Les spécialités du salon sont, outre les décolorations et les soins du visage réguliers, de nombreux types de coiffures, le maquillage de mariée et de cinéma et différents types de soins du visage et de colorations de cheveux à la mode.</p>
        </div>
       </div>
    </section>
    <section class="recent">
        <h1 class="title5">Coiffure Recentes</h1>
        <div class='FlexContainer'>
            <div>
                <img src="{{ url('/img/6.png') }}" alt="image non disponible">
            </div>
            <div>
                <img src="{{ url('/img/11.png') }}" alt="image non disponible">
            </div>
            <div>
                <img src="{{ url('/img/10.png') }}" alt="image non disponible">
            </div>
            <div>
                <img src="{{ url('/img/5.png') }}" alt="image non disponible">
            </div>
            <div>
                <img src="{{ url('/img/9.png') }}" alt="image non disponible">
            </div>
            <div>
                <img src="{{ url('/img/12.png') }}" alt="image non disponible">
            </div>
        </div>
    </section>
    <section class="book">
        <h1 class="title6">Nous faisons de la beaute et des dernieres creations</h1>
        <div class="flexbtn">
            <button></button>
            <button class="btn-contact">Contactez-Nous</button>
            <button></button>
        </div>
        
    </section>
    <section class="vide">
    </section>
    @include('layouts.footer')
</body>
</html>