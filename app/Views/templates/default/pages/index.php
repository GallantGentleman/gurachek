<div class="row">

    <?php for($i = 0; $i < count($data); $i++) { ?>

    <?php

    if(!empty($data[$i]['img'])) {
      $image = $data[$i]['img'];
    } else {
      $image = "noimage.png";
    }

    ?>

      <div class="col-xs-6 col-lg-4">
          <div id="block" class="thumbnail" style="background: url(<?=SITE_NAME;?>src/img/content-bg.png);border: 0px;">
              <a href="<?=SITE_NAME;?>project/index/<?=$data[$i]['id'];?>">
                <img src="<?=SITE_NAME;?>src/img/projects/<?=$image;?>" class="img-rounded" width="261" height="195">
              </a>
              <p></p>
              <div class="caption">
                  <h2>
                      <?=$data[$i]['name'];?>
                      <span class="badge">2</span>
                  </h2>
                  <p><?=$data[$i]['desc'];?></p>
              </div>
          </div>
      </div>

    <?php } ?>

</div>
