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
                 <div class="signup-form" id="registro">
                    <div class="title">Registrarse</div>
                    <form action="#" id="formulario">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="hidden" name="idusuario" id="idusuario">
                                <input type="text" placeholder="Ingrese su nombre" name="nombres" id="nombres" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-share-alt"></i>
                                <input type="text" placeholder="Referencia" name="referido" id="referido">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="Ingrese su email" name="login" id="login" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-phone"></i>
                                <input type="tel" name="telefono" id="telefono" />
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Ingrese su contraseña" name="clave" id="clave" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-camera"></i>
                                <input type="file" name="imagen" id="imagen">
                                <input type="hidden" name="imagenactual" id="imagenactual">
                                <img src="" width="70px" height="50px" id="imagenmuestra">

                            </div>
                            </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Permisos:</label>
                            <ul style="list-style: none;" id="permisos">
                            </ul>
                          </div>
                            <div class="button input-box">
                                <input type="submit" value="Registrar" id="btnGuardar">
                            </div>
                            <div class="text sign-up-text">Tiene Cuenta? <label><a href="login.html">Iniciar Sesión</a> </label></div>
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
