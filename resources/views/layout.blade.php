<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    <!-- Custom CSS for new colors -->
    
    <style>
        .navbar-light.bg-info {
            background-color: green !important; /* Bootstrap info color */
        }

        .nav-link.text-white {
            color: #fff !important;
        }

        .nav-link.text-success.bg-light {
            background-color: #f8f9fa !important; /* Bootstrap light color */
            color: #28a745 !important; /* Bootstrap success color */
        }
    </style>

    <title>Etudiants</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info text-white">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0 text-white" href="{{ route('home') }}">Accueil</a>
                <!-- Left links -->
                @if (Route::has('login'))
                    @auth
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('students.index') }}">Etudiants</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('filieres.index') }}">Filières</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('courses.index') }}">Cours</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('exams.index') }}">Examens</a>
                            </li>
                        </ul>
                    @else
                        <ul class="navbar-nav w-100 d-flex justify-content-end mb-2 mb-lg-0" style="float: right">
                            <li class="nav-item mx-4">
                                <a class="nav-link text-success bg-light rounded" href="{{ route('exams.results.show') }}">Resultats</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link text-white">connexion</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="ml-4 nav-link text-white">Inscrire</a>
                                </li>
                            @endif
                        </ul>
                    @endauth
                @endif
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            @auth
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="rounded-circle" height="25"
                                alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('signout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endauth
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>
