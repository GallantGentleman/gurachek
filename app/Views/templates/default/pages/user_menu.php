<div class="list-group">
    <a class="list-group-item active" style="background: #dc815b;border: 0px;">Menu</a>

    <?php if(isset($_SESSION['auth'])) { ?>
      <a href="<?=SITE_NAME;?>user/account/?id=<?=$_SESSION['auth'];?>" class="list-group-item"><span class="glyphicon glyphicon-log-in" style="margin-right:15px;"></span> Account</a>
      <a href="<?=SITE_NAME;?>project/list" class="list-group-item"><span class="glyphicon glyphicon-book" style="margin-right:15px;"></span> My projects</a>
      <a href="<?=SITE_NAME;?>project/create" class="list-group-item"><span class="glyphicon glyphicon-pencil" style="margin-right:15px;"></span> Create new project</a>
      <a href="<?=SITE_NAME;?>project/chating" class="list-group-item"><span class="glyphicon glyphicon-comment" style="margin-right:15px;"></span> Chating</a>
    <?php } else { ?>
      <a href="<?=SITE_NAME;?>user/sign_in" class="list-group-item"><span class="glyphicon glyphicon-user" style="margin-right:15px;"></span>Sign In</a>
      <a href="<?=SITE_NAME;?>user/sign_up" class="list-group-item"><span class="glyphicon glyphicon-plus" style="margin-right:15px;"></span>Sign Up</a>
    <?php } ?>

<span class="list-group-item">
 <form class="form-inline">
<div class="form-group has-success has-feedback">
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
<input type="text" class="form-control" id="inputGroupSuccess3" aria-describedby="inputGroupSuccess3Status">
</div>
</div>
</form>
</span>
</div>
