<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Kodinger" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/my-login.css" />
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="">
                    <div class="brand">
                        <img src="img/logo.jpg" alt="bootstrap 4 login page" />
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Usuarios</h4>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Contrasena</th>
                                        <th scope="col">Fecha de Creacion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <th scope="row">{{ $usuario->id_usuario }}</th>
                                            <td>{{ $usuario->nombre }}</td>
                                            <td>{{ $usuario->correo }}</td>
                                            <td>{{ $usuario->contrasena }}</td>
                                            <td>{{ $usuario->fecha_creacion }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>


                            <div class="form-group m-0">
                                <form method="POST" action="{{ route('login.logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-block">Salir</button>
                                </form>

                            </div>
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
