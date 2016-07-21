<div class="row">

<?php if(count($data) > 0) { ?>

    <?php for($i = 0; $i < count($data); $i++) { ?>

      <div class="col-xs-6 col-lg-4">
          <div class="thumbnail">
                <div class="caption" stype="margin-left: 50px;">
                    <h3>
                        <span class="glyphicon glyphicon-folder-open"> </span>
                         <a style="margin-left: 5px;" href="<?=SITE_NAME;?>project/index/<?=$data[$i]['id'];?>"><?=$data[$i]['name'];?></a>
                        <span class="badge">2</span>
                    </h3>
                    <p style="padding-left: 10px;"><?=$data[$i]['desc_p'];?></p>
                </div>
          </div>
      </div>
    <?php } ?>
    <?php } else { echo "<h3><center>На сайте пока нет проектов.</center></h3>"; } ?>
</div>
