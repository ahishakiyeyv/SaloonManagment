<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/css/menu.css')}}">
</head>
<body>
    <!-- header section starts -->
    <header class="header">
        <a href="#" class="logo"><img src="{{ url('/img/420321.png') }}" alt="image non disponible"> Umwizero</a>
        <nav class="navbar">
             <a href="{{ url('/') }}">Accueil</a>
             <a href="{{ url('service') }}">Service</a>
             <a href="{{ url('propos') }}">A Propos</a>
             <a href="{{ url('contact') }}">Contact</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
   </header>
   <!-- header section ends -->
</body>
</html>
<script>
    let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
     menu.classList.toggle('fa-times');
     navbar.classList.toggle('active');
}
</script>