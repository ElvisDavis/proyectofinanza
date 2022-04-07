<div class="">
  <nav class="navbar navbar-dark bg-dark">
    <a class="text-dark" href="#">Home</a>
    <a class="text-dark" href="#">Empresa</a>
    <a class="text-dark" href="#">Administrador</a>
    <a class="text-dark" href="usuario.php">Usuario</a>
    <?php if (Auth::validate()): ?>
    <a class="text-dark" href="resgistro.html">REGISTRO</a>
  <?php else: ?>
    <a class="text-dark" href="login.html">LOGIN</a>
    <?php endif; ?>
  </nav>
</div>
