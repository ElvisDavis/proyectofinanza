<?php 
require 'header.php';
?>
<title>Dashboard</title>

<body>
  <!-- nav -->
  <!-- <div class="wrap-input100 form-group"> -->
  <!-- <nav class="navbar navbar-light bg-light">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="container-fluid justify-content-start">
      </form>
    </nav> -->
  <!-- </div> -->

  <!--  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Empresa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="formUsuario.html">Usuario</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Acciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Saldo Actual</a></li>
              <li><a class="dropdown-item" href="#">Dias Ganados</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Resumen de Cuenta</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Administrador</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <a class="login100-form-btn" href="login.php">
                Login
              </a>
            </div>
          </div>
          <div class="container-register100-form-btn">
            <div class="wrap-register100-form-btn">
              <div class="register100-form-bgbtn"></div>
              <a class="register100-form-btn" href="formRegistro.php">
                Registro
              </a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </nav>
  <!-- card -->
  <div class="container">
    <h1 class="text-center">Planes Disponibles</h1>
    <div class="card-deck mt-3">

      <div class="card text-center border-info">
        <div class="card-body">
          <h4 class="card-title">Plan Inicial</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
            tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
            nec tortor sit amet, maximus mattis dui.
          </p>
          <p class="plan-price">
            $ 10,00 USDT - $ 100,00 USDT
          </p>
          <div class="container-register100-form-btn">
              <div class="wrap-register100-form-btn">
                  <div class="register100-form-bgbtn"></div>
                  <a class="register100-form-btn" type="button" href="formUsuario.html">
                      Comprar
                  </a>
              </div>
          </div>
        </div>
      </div>

      <div class="card text-center border-info">
        <div class="card-body">
          <h4 class="card-title">Plan Básico</h4>
          <p class="plan-price">
            $ 100,00 USDT - $500,00 USDT
          </p>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
            tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
            nec tortor sit amet, maximus mattis dui. </p>
            <div class="container-register100-form-btn">
                <div class="wrap-register100-form-btn">
                    <div class="register100-form-bgbtn"></div>
                    <a class="register100-form-btn" type="button" href="formUsuario.html">
                        Comprar
                    </a>
                </div>
            </div>
        </div>
      </div>

      <div class="card text-center border-info">
        <div class="card-body">
          <h4 class="card-title">Plan Intermedio</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
            tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
            nec tortor sit amet, maximus mattis dui. </p>
            <p class="plan-price">
              $ 500,00 USDT - $ 1.000,00 USDT
            </p>
            <div class="container-register100-form-btn">
                <div class="wrap-register100-form-btn">
                    <div class="register100-form-bgbtn"></div>
                    <a class="register100-form-btn" type="button" href="formUsuario.html">
                        Comprar
                    </a>
                </div>
            </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Group 2 Card-->
  <div class="container">
    <div class="card-deck mt-3">

      <div class="card text-center border-info">
        <div class="card-body">
          <h4 class="card-title">Plan Corporativo</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
            tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
            nec tortor sit amet, maximus mattis dui. </p>
            <p class="plan-price">
              $ 1.000,00 USDT - $ 5.000,00 USDT
            </p>
            <div class="container-register100-form-btn">
                <div class="wrap-register100-form-btn">
                    <div class="register100-form-bgbtn"></div>
                    <a class="register100-form-btn" type="button" href="formUsuario.html">
                        Comprar
                    </a>
                </div>
            </div>
        </div>
      </div>

      <div class="card text-center border-info">
        <div class="card-body">
          <h4 class="card-title">Plan Semi-Senior</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
            tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
            nec tortor sit amet, maximus mattis dui. </p>
            <div class="container-register100-form-btn">
                <div class="wrap-register100-form-btn">
                    <div class="register100-form-bgbtn"></div>
                    <a class="register100-form-btn" type="button" href="formUsuario.html">
                        Comprar
                    </a>
                </div>
            </div>
        </div>
      </div>

      <div class="card text-center border-info">
        <div class="card-body">
          <h4 class="card-title">Plan Senior</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lectus sem,
            tempor vitae mattis malesuada, ornare sed erat. Pellentesque nulla dui, congue
            nec tortor sit amet, maximus mattis dui. </p>
            <div class="container-register100-form-btn">
                <div class="wrap-register100-form-btn">
                    <div class="register100-form-bgbtn"></div>
                    <a class="register100-form-btn" type="button" href="formUsuario.html">
                        Comprar
                    </a>
                </div>
            </div>
        </div>
      </div>

    </div>
  </div>



</body>

<script>
  const phoneInputField = document.querySelector("#phone");
  const phoneInput = window.intlTelInput(phoneInputField, {
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous">
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
<script src="../dist/js/main.js"></script>

</html>
