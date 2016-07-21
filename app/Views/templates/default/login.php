<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=SITE_NAME;?>src/img/favicon.ico" type="image/x-icon">

    <title><?=$title;?></title>

    <link href="<?=SITE_NAME;?>src/css/bootstrap.css" rel="stylesheet">
    <link href="<?=SITE_NAME;?>src/css/signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <?php include 'app/views/templates/default/pages/' . $content . '.php'; ?>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
