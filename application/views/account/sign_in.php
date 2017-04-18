<!--div class="container container-with-navbar">
      <h1 class="col-sm-offset-2">Sign In</h1>
      <form class="form-horizontal" method="POST">
        <div class="form-group">
          <label for="inputEmail" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" value="TRUE"> Remember me
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-4">
            <button type="submit" class="btn btn-default">sign in</button>
          </div>
          <div class="col-sm-6 text-right">
            <a class="btn btn-link" href="<?//=site_url()?>/account/remind_password" role="button">remind password</a>
          </div>
       </div>
      </form>
      
</div-->

<div class="loginpage">
 <div class="login-field">
        <form action="" class="form-signin" method="POST">
            <h2 class="form-signin-heading">Log in</h2>
            <div class="input-group">
                <input name="email" autofocus="" class="form-control" id="inputEmail" placeholder="Email address" required="" type="email"> <span class="input-group-addon"><i aria-hidden="true" class="fa fa-envelope"></i></span>
            </div>
            <div class="input-group">
                <input name="password" class="form-control" id="inputPassword" placeholder="Password" required="" type="password"> <span class="input-group-addon"><i aria-hidden="true" class="fa fa-key"></i></span>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="remember-me" name="remember"> Remember me</label> <label class="forgot-password"><a href="<?=site_url()?>/account/remind_password">Forgot password</a></label>
            </div><button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> <a class="btn btn-lg btn-primary btn-block register" href="register.html">Register</a>
        </form>
     <?php foreach ($this->aauth->get_errors_array() as $error){ ?>
        <div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <?php echo $error; ?>
        </div>
      <?php } ?>
    </div>
</div>