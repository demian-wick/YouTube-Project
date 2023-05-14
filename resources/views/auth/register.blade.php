<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registrase</title>
</head>
<body>

    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="container w-25 text-center p-0">
            <div class="card bg-dark">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--Nombre del usuario-->
                        <label class="form-label text-light">Nombre del Usuario</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Nombre ejemplo" required>
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-light" />
                        <!--Correo electronico-->
                        <label class="form-label text-light">Correo electronico</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="ejemplo@gmail.com" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-light" />
                        <!--Contraseña-->
                        <label class="form-label text-light">Contraseña</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Contraseña" required>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-light" />
                        <label class="form-label text-light">Confirmar contraseña</label>
                        <input class="form-control" type="password_confirmation" name="password_confirmation" id="password_confirmation" placeholder="Contraseña" required>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-light" />
                        <br>
                        <button class="btn btn-success btn-block">Registrarse</button>
                    </form>
                </div>
                <div class="card-footer">
                    <h5 class="text-light">¿Ya tienes una cuenta?</h5>
                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-block">Iniciar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
