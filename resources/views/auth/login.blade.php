<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Iniciar Sesión</title>
</head>
<body>

<div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="container w-25 text-center p-0">
        <div class="card bg-dark">
            <div class="card-header">
                <img src="/images/youtube.png" class="aling-middle" width="50" height="50">
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!--Dirección de correo electronico -->
                    <label class="form-label text-light">Correo electronico</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="ejemplo@gmail.com" required>

                    <!--Contraseña -->
                    <label class="form-label text-light">Contraseña</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Contraseña" autocomplete="current-password">
                    <br>
                    <button class="btn btn-primary btn-block" type="submit">Iniciar Sesión</button>
                </form>
            </div>
            <div class="card-footer">
                <h5 class="text-center text-light">¿No tienes cuenta?</h5>
                <a class="btn btn-outline-light btn-block" href="{{ route('register')}}">Registrarse</a>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
