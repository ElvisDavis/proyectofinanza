<?php
require 'header.php';
?>
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

                                  <a class="txt2" href="login.php">
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
