<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>YouTube</title>
</head>
<body>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">


        <div class="card w-100 h-100 bg-dark">
            <div class="card-body">
                <div class="card-header">
                    <div class="container">
                    <h1 class="text-center text-white">
                        <img src="images/youtube.png" alt="YouTube" class="align-middle" width="50" height="50">
                        YouTube
                    </h1>
                </div>

                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-danger">Iniciar Sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-light">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            </div>


                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="btn btn-outline-secondary active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Inicio</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="btn btn-outline-secondary" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Tendencia</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="btn btn-outline-secondary" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Música</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn btn-outline-secondary" id="videojuegos-tab" data-bs-toggle="tab" data-bs-target="#videojuegos-tab-pane" type="button" role="tab" aria-controls="videojuegos-tab-pane" aria-selected="false">Videojuegos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn btn-outline-secondary" id="artes-tab" data-bs-toggle="tab" data-bs-target="#artes-tab-pane" type="button" role="tab" aria-controls="artes-tab-pane" aria-selected="false">Artes</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="videojuegos-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="artes-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                      </div>

                    </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
