

<!--div class="loginpage">
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
</div-->


<div class="row justify-content-center">
      <div class="col-sm-5">   
        <div class="card">
           <div class="card-header text-center bg-primary text-white"><h3>Login</h3></div>
           <div class="card-block">
             <form action="" method="POST">
                 <?php foreach ($this->aauth->get_errors_array() as $error){ ?>
        <div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <?php echo $error; ?>
        </div>
      <?php } ?>
                 <div class="form-group row">
                   <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                   <div class="col-sm-10">
                     <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                   </div>
                 </div>
              <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                   <div class="col-sm-10">
                     <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                   </div>
                 </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
             </form>
           </div>
         </div>
       </div>