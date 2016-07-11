<div class="row">
    <div class="col-lg-12">
      <div class="thumbnail" style="background: white;">

<?php if(count($data) > 0) { ?>

    <?php for($i = 0; $i < count($data); $i++) { ?>

    <?php

    if(!empty($data[$i]['img'])) {
      $image = $data[$i]['img'];
    } else {
      $image = "noimage.png";
    }

    ?>

                <div class="caption" stype="margin-left: 50px;">
                    <h3>
                        <span class="glyphicon glyphicon-folder-open"> </span>
                         <a style="margin-left: 5px;" href="<?=SITE_NAME;?>project/index/<?=$data[$i]['id'];?>"><?=$data[$i]['name'];?></a>
                        <span class="badge">2</span>
                    </h3>
                    <p style="padding-left: 10px;"><?=$data[$i]['desc_p'];?></p>
                </div>

              <p><?php if($i != count($data) - 1)  echo "<div style='border: 1px solid #444; width: 800px;margin: 0 auto;'></div>"; ?></p>



    <?php } ?>
    <?php } else {echo "<h3><center>На сайте пока нет проектов.</center></h3>";} ?>
</div>
</div>
</div>
