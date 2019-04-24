<div class="jumbotron">
<div class="container">
<div class="container h-100 d-flex justify-content-center">
<div class="jumbotron my-auto">
<form class="form-signin" action="<?=base_url()?>users/login" method="post">
  <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
  <label for="username" class="sr-only">Username</label>
  <input type="username" name="username" id="username" class="form-control" placeholder="username" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <?php
    if ($error==1) {
        echo "<p>Acceso no autorizado!</p>";
      }
  ?>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
</div>
</div>
</div>
</div>
</div>
