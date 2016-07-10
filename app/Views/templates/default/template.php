<!-- Background-color : #2b5c73; -->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Boto</title>

    <link href="<?=SITE_NAME;?>src/css/bootstrap.css" rel="stylesheet">
    <link href="<?=SITE_NAME;?>src/css/offcanvas.css" rel="stylesheet">
    <link href="<?=SITE_NAME;?>src/css/common.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=SITE_NAME;?>src/img/favicon.ico" type="image/x-icon">

</head>

<body style="background: url(<?=SITE_NAME;?>src/img/bg.png) repeat;">
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="<?=SITE_NAME;?>"><em><b><span style="color: #2b5c73;">P</span><span style="color: #732b32;">P</span></b></em> Manager</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?=SITE_NAME;?>">Главная</a></li>
                <li><a href="<?=SITE_NAME;?>about">О сайте</a></li>
                <li><a href="<?=SITE_NAME;?>contacts">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">

            <?php include 'app/views/templates/default/pages/' . $content . '.php'; ?>

        </div>
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
                <a class="list-group-item active">Menu</a>
                <a href="<?=SITE_NAME;?>menu/auth" class="list-group-item"><span class="glyphicon glyphicon-log-in" style="margin-right:15px;"></span> Authorization</a>
                <a href="<?=SITE_NAME;?>menu/reg" class="list-group-item"><span class="glyphicon glyphicon-pencil" style="margin-right:15px;"></span> Registration</a>
                <a href="<?=SITE_NAME;?>menu/fb" class="list-group-item"><span class="glyphicon glyphicon-comment" style="margin-right:15px;"></span> Feedback</a>
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
        </div>
    </div>
    </div>
