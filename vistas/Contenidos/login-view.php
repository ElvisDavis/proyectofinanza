<?php
require 'Link.php';
?>
<div class="login-container">
	<div class="login-content">
		<p class="text-center">
			<i class="fas fa-user-circle fa-5x"></i>
		</p>
		<p class="text-center">
			Inicia sesión con tu cuenta
		</p>
		<form action="" method="POST" autocomplete="off" >
			<div class="form-group">
				<label for="UserName" class="bmd-label-floating"><i class="fas fa-user-secret"></i> &nbsp; Usuario</label>
				<input type="text" class="form-control" id="UserName" name="usuario" pattern="[a-zA-Z0-9]{1,35}" maxlength="35" required="" >
			</div>
			<div class="form-group">
				<label for="UserPassword" class="bmd-label-floating"><i class="fas fa-key"></i> &nbsp; Contraseña</label>
				<input type="password" class="form-control" id="UserPassword" name="clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required="" >
			</div>
			<button type="submit" class="btn-login text-center">LOG IN</button>

      <div class="mb-3">
      <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
		</form>
	</div>
</div>
