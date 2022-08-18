<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="{{asset('frontend/css/navside.css')}}">
</head>
<body>
    <aside class="aside">
        <div class="logo_name">
            <img src="{{ url('/img/420321.png') }}" alt="image non disponible" class="img_logo">
            <a href="#" class="logo">Saloon</a>
        </div>
        <div class="profile_name">
            <img src="{{ url('/img/200.jpg') }}" alt="image non disponible" class="img_profile">
            <a href="#" class="name">
                {{Auth::user()->name;}}
            </a>
        </div>
        <div class="container_link">
            <ul class="ule">
                <li class="lii">
                    <a href="#" class="link">
                        <i class='bx bx-grid-alt' ></i>
                        Service
                    </a>
                </li>
                <li class="lii">
                    <a href="#" class="link">Customer</a>
                </li>
                <li class="lii">
                    <a href="#" class="link">Appointment</a>
                </li>
                <li class="lii">
                    <a href="#" class="link">Invoice</a>
                </li>
                <li class="lii">
                    <a href="#" class="link">Gestion</a>
                </li>
                <li class="lii">
                    <a href="#" class="link">Statistiques</a>
                </li>
                <li class="lii">
                    <a href="#" class="link">Utilisateur</a>
                </li>
            </ul>
        </div>
        <div class="logout_link">
            <a href="#" class="link_logout"><i class="fa-solid fa-arrow-up-left-from-circle"></i>Logout</a>
        </div>
        <a href="{{route('logout')}}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class='bx bx-log-out' ></i></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </aside>
</body>
</html>