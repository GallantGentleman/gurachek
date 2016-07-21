<form class="form-signin" method="post" action="<?=SITE_NAME;?>user/sign_up">
  <h2 class="form-signin-heading">Please Sign Up</h2>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="signup[email]" required autofocus><br>
  <input type="text" id="inputEmail" class="form-control" placeholder="Your name" name="signup[name]" required><br>
  <input type="password" id="inputPassword" class="form-control" placeholder="Enter password" name="signup[pass]" required>
  <input type="password" id="inputPassword" class="form-control" placeholder="Repeat password" name="signup[pass2]" required>

  <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup[sign_up]">Sign Up</button>
</form>
