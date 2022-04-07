<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->

	<link rel="stylesheet" type="text/css" href="../dist/vendor/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="../dist/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../dist/fonts/iconic/css/material-design-iconic-font.min.css">

        <link rel="stylesheet" type="text/css" href="../dist/vendor/animate/animate.css">

        <link rel="stylesheet" type="text/css" href="../dist/vendor/css-hamburgers/hamburgers.min.css">

        <link rel="stylesheet" type="text/css" href="../dist/vendor/animsition/css/animsition.min.css">

        <link rel="stylesheet" type="text/css" href="../dist/vendor/select2/select2.min.css">

        <link rel="stylesheet" type="text/css" href="../dist/vendor/daterangepicker/daterangepicker.css">

        <link rel="stylesheet" type="text/css" href="../css/util.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="validaLogin.php" method="POST">
					<span class="login100-form-title p-b-26">
						Acceso
					</span>
					<!-- <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span> -->

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							No ienes aún una cuenta?
						</span>

						<a class="txt2" href="formRegistro.html">
							Registrate
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>


	<script src="../dist/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="../dist/vendor/animsition/js/animsition.min.js"></script>

	<script src="../dist/vendor/bootstrap/js/popper.js"></script>
	<script src="../dist/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="../dist/vendor/select2/select2.min.js"></script>

	<script src="../dist/vendor/daterangepicker/moment.min.js"></script>
	<script src="..dist/vendor/daterangepicker/daterangepicker.js"></script>

	<script src="../dist/vendor/countdowntime/countdowntime.js"></script>

	<script src="../dist/js/main.js"></script>
</body>
</html>