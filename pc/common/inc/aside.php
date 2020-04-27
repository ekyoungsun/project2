<div id="subImg" class="<?=$idx?>">
    <div class="wrap">
        <h2><?=$idx?></h2>
        <ul class="twoConts">
            <? foreach($twoSubArr as $k => $v){ ?>           
            <li><a href="?idx=<?=$idx?>&pages=<?=$k?>"><span><?=$v?></span></a></li>
            <? } ?>            
        </ul>
        <? 
            $hidden = ['perfume', 'soap'];
            foreach($hidden as $i){
                if($i == $idx){
                    include ("sub/".$idx."/search.php");
                }    
            }
        ?>
    </div>
</div>
  