<!-- Background-color : #2b5c73; -->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <title><?=$title;?></title>

    <link href="<?=SITE_NAME;?>src/css/bootstrap.css" rel="stylesheet">
    <link href="<?=SITE_NAME;?>src/css/offcanvas.css" rel="stylesheet">
    <link href="<?=SITE_NAME;?>src/css/common.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=SITE_NAME;?>src/img/favicon.ico" type="image/x-icon">

</head>

<body style="background: url(<?=SITE_NAME;?>src/img/bg.jpg);">
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand" href="<?=SITE_NAME;?>"><em><b><span style="color: #2b5c73;">P</span><span style="color: #732b32;">P</span></b></em> Manager</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?=SITE_NAME;?>">Main</a></li>
                <li><a href="<?=SITE_NAME;?>about">About</a></li>
                <li><a href="<?=SITE_NAME;?>contacts">Contacts</a></li>
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
            <?php include 'app/views/templates/default/pages/user_menu.php'; ?>
        </div>
    </div>
    </div>
