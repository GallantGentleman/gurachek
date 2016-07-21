<div class='text-center choose-block'>
  <h1>Choose operation !</h1>
  <br>
  <?php
    if(!isset($_SESSION['first_visit'])) {
      $disabled = "disabled='disabled'";
    } else {
      $disabled = "";
    }
  ?>
  <a type="button" class="btn btn-success btn-lg" href="<?=SITE_NAME;?>user/sign_in" <?=$disabled;?>>Sign In</a>
  <a type="button" class="btn btn-primary btn-lg" href="<?=SITE_NAME;?>user/sign_up" <?=$disabled;?>>Sign Up</a>
  <br>
  <br>
  <a href="<?=SITE_NAME;?>?active">View site</a>
</div>
