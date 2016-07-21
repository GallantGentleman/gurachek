<div class="row">

<?php if(count($data) > 0) { ?>

    <?php for($i = 0; $i < count($data); $i++) { ?>

      <div class="col-xs-6 col-lg-4">
          <div class="thumbnail" style="height:200px;">
                <div class="caption" stype="margin-left: 50px;">
                  <a style='color: #dc815b;' href="<?=SITE_NAME;?>project/index/<?=$data[$i]['id'];?>">
                    <img style='float:left' src="<?=SITE_NAME;?>src/img/project_icon/<?=$data[$i]['img'];?>.png">
                  </a>
                    <h3 align='center' style='margin-left:80px;'>
                         <a style='color: #dc815b;' href="<?=SITE_NAME;?>project/index/<?=$data[$i]['id'];?>"><?=$data[$i]['name'];?></a>
                    </h3>
                    <p style="padding-left: 10px;float:;margin-left: 80px;"><?=substr($data[$i]['desc_p'], 0, count($data[$i]['desc_p']) * -1);?></p>
                </div>
          </div>
      </div>
    <?php } ?>
    <?php } else { echo "<h3><p align='center'>На сайте пока нет проектов.</p></h3>"; } ?>
</div>
