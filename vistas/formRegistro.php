<!DOCTYPE html>
<html lang="es">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" type="text/css" href="../dist/vendor/bootstrap/css/bootstrap.min.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
              
          <link rel="stylesheet" type="text/css" href="../dist/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

          <link rel="stylesheet" type="text/css" href="../dist/fonts/iconic/css/material-design-iconic-font.min.css">

          <link rel="stylesheet" type="text/css" href="../dist/vendor/animate/animate.css">

          <link rel="stylesheet" type="text/css" href="../dist/vendor/css-hamburgers/hamburgers.min.css">

          <link rel="stylesheet" type="text/css" href="../dist/vendor/animsition/css/animsition.min.css">

          <link rel="stylesheet" type="text/css" href="../dist/vendor/select2/select2.min.css">

          <link rel="stylesheet" type="text/css" href="../dist/vendor/daterangepicker/daterangepicker.css">

          <link rel="stylesheet" type="text/css" href="../css/util.css">
          <link rel="stylesheet" type="text/css" href="../css/main.css">
          <link rel="stylesheet" href="../css/style.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
          <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
      </head>
      <title>Registro</title>

      <body>
          <!-- nav -->
          <!-- <nav class="navbar navbar-light bg-light">
              <form class="container-fluid justify-content-start">
                <button class="btn btn-outline-success me-2" type="button">Login</button>
                <button class="btn btn-sm btn-outline-secondary" type="button">Register</button>
              </form>
            </nav> -->
          <!-- multistep form -->
          <form action="#" method="post" id="register" onsubmit="process(event)">
              <div class="limiter">
                  <div class="container-register100">
                      <div class="wrap-register100">
                          <form class="register100-form validate-form">
                              <span class="register100-form-title p-b-26">
                                  Registro Usuario
                              </span>
                              <!-- <span class="login100-form-title p-b-48">
      						<i class="zmdi zmdi-font"></i>
      					</span> -->
                              <div class="wrap-input100 form-group">
                                  <label for="name_empresa">Empresa:</label>
                                  <select class="form-select" aria-label="Default select example">
                                      <option selected>Open this select menu</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                  </select>
                              </div>
                              <div class="wrap-input100 validate-input alert-validate form-group">
                                  <label for="nombres_usuario">Nombres:</label>
                                  <input type="text" name="nombres_usuario" placeholder="Juan Perez">
                                  <!-- <span class="focus-input100" data-placeholder="Juan Perez"></span> -->
                                  <!-- <input type="text" name="apellidos_usuario" placeholder="Perez" /> -->
                              </div>
                              <div class="wrap-input100 validate-input alert-validate form-group">
                                  <label for="name_usuario">Nombre de Usuario:</label>
                                  <input type="text" name="name_usuario" placeholder="juanperez" />
                              </div>
                              <div class="wrap-input100 validate-input form-group">
                                  <label for="telefono">Teléfono:</label>
                                  <input id="phone" type="tel" name="phone" />
                                  <!-- <input type="submit"
                                      class=" container-register100-form-btn wrap-register100-form-btn  register100-form-btn"
                                      value="Verify" /> -->
                              </div>
                              <div class="alert alert-info" style="display: none;"></div>
                              <div class="wrap-input100 validate-input alert-validate form-group"
                                  data-validate="Valid email is: a@b.c">
                                  <label for="email">Email:</label>
                                  <input class="input100" type="text" name="email" placeholder="example@mail.com">
                                  <!-- <span class="focus-input100" data-placeholder="Email"></span> -->
                              </div>

                              <div class="wrap-input100 validate-input alert-validate form-group"
                                  data-validate="Enter password">
                                  <span class="btn-show-pass">
                                      <i class="zmdi zmdi-eye"></i>
                                  </span>
                                  <label for="pass">Password:</label>
                                  <input class="input100" type="password" name="pass" placeholder="Password">
                                  <!-- <span class="focus-input100" data-placeholder="Password"></span> -->
                              </div>

                              <div class="container-register100-form-btn">
                                  <div class="wrap-register100-form-btn">
                                      <div class="register100-form-bgbtn"></div>
                                      <button class="register100-form-btn" type="submit" href="login.html">
                                          Guardar
                                      </button>
                                  </div>
                              </div>
                              <div class="container-register100-form-btn">
                                  <div class="wrap-register100-form-btn">
                                      <div class="register100-form-bgbtn"></div>
                                      <button class="register100-form-btn" type="reset">
                                          Cancelar
                                      </button>
                                  </div>
                              </div>

                              <div class="text-center p-t-115">
                                  <span class="txt1">
                                      Si tienes cuenta?
                                  </span>

                                  <a class="txt2" href="login.html">
                                      Iniciar Sesion
                                  </a>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </form>
      </body>

      <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
         utilsScript:
           "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
      </script>
      <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
          integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous">
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
              fetch('https://ipinfo.io/json?token=7c7bc31e374267', { headers: { 'Accept': 'application/json' } })
                  .then((resp) => resp.json())
                  .catch(() => {
                      return {
                          country: 'ec',
                      };
                  })
                  .then((resp) => callback(resp.country));
          }
      </script>
      <script src="../dist/js/main.js"></script>

</html>
