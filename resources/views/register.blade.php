<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Kodinger" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/my-login.css" />
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="img/logo.jpg" alt="bootstrap 4 login page" />
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Registro</h4>


                            <form method="POST" action="{{ route('usuario.create') }}" class="my-login-validation"
                                novalidate="">
                                @csrf
                                <div class="invalid-feedback" style="display: grid;">{{ isset($error) ? $error : '' }}
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input id="name" type="text" class="form-control" name="name" required
                                        autofocus />
                                    <div class="invalid-feedback">¿Cómo te llamas?</div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Dirección de correo electrónico </label>
                                    <input id="email" type="email" class="form-control" name="email" required />
                                    <div class="invalid-feedback">Tu Correo Electrónico es Inválido</div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input id="password" minlength="8" maxlength="20" type="password"
                                        class="form-control" name="password" required data-eye />
                                    <div class="invalid-feedback">Se requiere contraseña</div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="agree" id="agree" class="custom-control-input"
                                            required="" />
                                        <label for="agree" class="custom-control-label">Estoy de acuerdo con los<a
                                                href="#"> Términos y Condiciones</a></label>
                                        <div class="invalid-feedback">
                                            Debes estar de acuerdo con nuestros términos y condiciones.
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
                                </div>
                                <div class="mt-4 text-center">
                                    ¿Ya tienes una cuenta?
                                    <a href="{{ route('login.view') }}">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">Yurenis Diaz - Jhonatan Lagares</div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/my-login.js"></script>
</body>

</html>
