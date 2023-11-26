<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fitness application</title>
    <!-- Bootstrap core CSS  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <script src="https://kit.fontawesome.com/333e20bc9c.js" crossorigin="anonymous"></script>
    <style>
        div.mb140 {
            margin-bottom: 140px;
        }

        div.mt80 {
            margin-top: 80px;
        }
        .btn_spec{
            color: white;
        }

        .header {
                position: sticky;
                top: 0;
                }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary header">
        <div class="container px-lg-5"> <a class="btn_spec" href="#! " role="button "><i class="fa-solid fa-heart fa-beat fa-3x" aria-hidden="true"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link {{ (request()->is('home')) ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a></li>
                    @guest
                        <li class="nav-item"><a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Вход</a></li>
                        <li class="nav-item"><a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Регистрация</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link {{ (request()->is('slots')) ? 'active' : '' }}" href="{{ route('slots.index') }}">Мои занятия</a></li>

                        <li class="nav-item"><a class="nav-link {{ (request()->is('logout')) ? 'active' : '' }}" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Выход</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                    @can('view', auth()->user())
                        <li class="nav-item"><a class="nav-link {{ (request()->is('admin/slots')) ? 'active' : '' }}" href="{{ route('admin.slots.index') }}">Редактирование расписания</a></li>
                    @endcan
                </ul>
            </div>
        </div>
    </nav>
    <p></p>
    <!-- Responsive navbar-->
    <!-- Main Container -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Main Container -->
    <p></p>
    <!-- Footer -->
    <footer class="bg-primary text-center text-white fixed-bottom ">
        <!-- Grid container -->
        <div class="container p-4 pb-0 ">
            <!-- Section: Social media -->
            <section class="mb-4 ">
                <!-- Facebook --><a class="btn_spec btn-outline-light btn-floating m-1 " href="#! " role="button "><i class="fab fa-facebook-f "></i></a>
                <!-- Twitter --><a class="btn_spec btn-outline-light btn-floating m-1 " href="#! " role="button "><i class="fab fa-twitter "></i></a>
                <!-- Google --><a class="btn_spec btn-outline-light btn-floating m-1 " href="#! " role="button "><i class="fab fa-google "></i></a>
                <!-- Instagram --><a class="btn_spec btn-outline-light btn-floating m-1 " href="#! " role="button "><i class="fab fa-instagram "></i></a>
                <!-- Linkedin --><a class="btn_spec btn-outline-light btn-floating m-1 " href="#! " role="button "><i class="fab fa-linkedin-in "></i></a>
                <!-- Github --><a class="btn_spec btn-outline-light btn-floating m-1 " href="#! " role="button "><i class="fab fa-github "></i></a> </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2); "> © 2023 Copyright: <a class="text-white " href="mailto:liza.nickonova@mail.ru ">liza.nickonova@mail.ru</a> </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="{{ asset('js/bootstrap.min.js') }}" />
 </body>

</html>
