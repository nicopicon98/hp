<?php
include 'header.php';
require 'config/connection.php';

$errores = [];
$db = new basedatos;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!$email) {
    $errores['email'] = 'El email es obligatorio o no es valido';
  }
  if (!$password) {
    $errores['password'] = 'La contraseña es obligatoria o no es valida';
  }
  if (empty($errores)) {
    $res = $db->login($email, $password); //true or false
    if ($res) {
      header('Location: /admin');
      exit;
    }
    $errores['common'] = 'Email or password not valid';
  }
}

?>

<main class="form-signin text-center mt-5">
  <form method="POST">
    <img class="mb-4" src="assets/img/hp-logo.png" alt="hp-logo" width="100">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <!-- Error handling -->
    <p class="text-danger"><?php echo isset($errores['common']) ? $errores['common'] : ''; ?></p>
    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <!-- Error handling -->
    <p class="text-danger"><?php echo isset($errores['email']) ? $errores['email'] : ''; ?></p>
    <div class="form-floating mt-2">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <!-- Error handling -->
    <p class="text-danger"><?php echo isset($errores['password']) ? $errores['password'] : ''; ?></p>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">All rights reserved © <?php echo date('Y') ?></p>
  </form>
</main>
<?php include 'footer.php' ?>