<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="../css/login.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="../dist/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="container">


        <div class="forms">
            <div class="form-content">
                <div class="login-form" id="login">
                    <div class="title">Inicio de Sesión</div>
                    <form action="#">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Ingrese su email" name="correo1" id="correo1" required>
                            </div>
                            <div class="input-box">
                                <input type="password" spellcheck="false" placeholder="Ingrese su contraseña" name="contrasena1" id="contrasena1" required>
                                <label for=""></label>
                                <i class="fa fa-eye-slash toggle"></i>
                            </div>
                            <div class="text"><a href="#">Olvido Password?</a></div>
                            <div class="button input-box">
                                <input type="submit" value="Iniciar Sesion" id="btn_login">
                            </div>
                            <div class="text sign-up-text">No tiene cuenta? <label id="btn-registro" onclick="mostrarform(true)">Registrarse</label></div>
                        </div>
                    </form>
                </div>

                <div class="signup-form" id="registro">
                    <div class="title">Registrarse</div>
                    <form action="#" id="formulario">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="hidden" name="idusuario" id="idusuario">
                                <input type="text" placeholder="Ingrese su nombre" name="nombre" id="nombre" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-share-alt"></i>
                                <input type="text" placeholder="Referencia" name="referencia" id="referencia">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Ingrese su email" name="correo" id="correo" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-phone"></i>
                                <input type="tel" name="telefono" id="telefono" />
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Ingrese su contraseña" name="contrasena" id="contrasena" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-camera"></i>
                                <input type="file" name="imagen" id="imagen">
                                <input type="hidden" name="imagenactual" id="imagenactual">
                                <img src="" width="70px" height="50px" id="imagenmuestra">

                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Registrar" id="btnGuardar">
                            </div>
                            <div class="text sign-up-text">Tiene Cuenta? <label onclick="mostrarform(false)">Iniciar Sesión</label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end login -->
    <footer>

    </footer>
    <script src="../dist/js/jquery-3.6.0.min.js"></script>
    <script src="../dist/public/js/bootstrap.min.js"></script>
    
    <script src="../dist/js/bootbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script type="text/javascript" src="./js/usuario.js"></script>
    <script>
        const phoneInputField = document.querySelector("#telefono");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>
    <script>
        const info = document.querySelector(".alert-info");

        function process(event) {
            event.preventDefault();

            const phoneNumber = phoneInput.getNumber();

            info.style.display = "";
            info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
        }
    </script>
    <script>
        function getIp(callback) {
            fetch('https://ipinfo.io/json?token=7c7bc31e374267', {
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then((resp) => resp.json())
                .catch(() => {
                    return {
                        country: 'ec',
                    };
                })
                .then((resp) => callback(resp.country));
        }
    </script>
    <!-- end phone  -->


</body>

</html>
