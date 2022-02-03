<?php include 'header.php' ?>
<main class="form-signin text-center mt-5">
  <form>
    <img class="mb-4" src="assets/img/hp-logo.png" alt="hp-logo" width="100">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mt-2">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

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