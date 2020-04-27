<div id="subImg" class="<?=$idx?>">
    <div class="wrap">
        <? 
            foreach($twoMenuExi as $value){ 
                foreach($value as $k => $v){
                    if($page==$k){
        ?>
        <h2><?=$v?></h2>
        <?  
                }
              }
            } 
        ?>
    </div>
</div>
  