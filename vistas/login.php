<?php
include 'header.php';
?>
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
							No tienes aún una cuenta?
						</span>

						<a class="txt2" href="formRegistro.php">
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
