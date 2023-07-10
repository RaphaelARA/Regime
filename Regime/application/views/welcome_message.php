<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="<?php echo base_url('public/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/signin.css'); ?>">
    <script src="<?php echo base_url('public/assets/js/ie-emulation-modes-warning.js'); ?> "></script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" action="<?php echo base_url('login/process_login'); ?>">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="username" class="sr-only">Nom d'utilisateur ou adresse e-mail :</label>
        <input type="email" id="username" class="form-control" placeholder="Email address" name="username" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button><br>
        <p>Not registered yet ? Create an account <a href="signup">here</a> </p>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
