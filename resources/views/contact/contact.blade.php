<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('frontend/css/contact.css')}}">
    <title>Contact | US</title>
</head>
<body>
    @include('layouts.menu')
    <section class="homepage1">
        <h1 class="title1">
            <a href="{{ url('') }}" class="link3">Accueil</a>><a href="#" class="link4">Contact</a>
        </h1>
    </section>
    <section class="contact-info">
        <h1 class="title2">Contact Information</h1>
        <div class="container-info">
            <div class="box">
                <h1 class="ttle1">ADDRESS:</h1>
                <p class="parag">12th Street, Avenue California</p>
            </div>
            <div class="box">
                <h1 class="ttle1"> PHONE:</h1>
                <p class="parag">1234567890</p>
            </div>
            <div class="box">
                <h1 class="ttle1">EMAIL:</h1>
                <p class="parag">ahig@biu.bi</p>
            </div>
            <div class="box">
                <h1 class="ttle1">WEBSITE:</h1>
                <p class="parag">http://yvanigor.epizy.com</p>
            </div>
        </div>
    </section>
    <section class="container2">
        <div class="grp-box">

        </div>
        <div class="grp-box">

        </div>
    </section>
    <section class="vide">

    </section>
    @include('layouts.footer')
</body>
</html>