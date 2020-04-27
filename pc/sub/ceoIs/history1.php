<? include "data/data.php"; ?>
<div id="subContainer">
    <div class="historyWrap">
        <div class="historyframe">
            <div class="top">
                <div class="repeat"></div>
                <div class="tC"></div>
            </div>
        </div>
        <div class="middle">
            <div>
                <div class="repeatL"></div>
<!--                <div class="mL"></div>   -->
                <div class="mL1"></div>  
                <div class="mL2"></div>  
                <div class="mL3"></div>
            </div>
            <div class="wrap">
                <div class="cap"></div>
                <div class="glass"></div>
                <div class="perfIcon1"></div>
                <div class="perfIcon2"></div>
                <div class="timeIcon"></div>
                <div class="historyList">
                    <ul>
                        <? foreach($pageArrs as $key => $value){ 
                             foreach($value as $k => $v){
                        ?>
                            <li><a href="#none"><h3><?=$v?></h3></a></li>
                        <? } } ?>
                    </ul>
                    <div class="historyCon">
                        <? include $historyArr; ?>
                    </div>
                </div>
            </div>
<!--                <div class="mR"></div>    -->
            <div class="mR1"></div>    
            <div class="mR2"></div>    
            <div class="mR3"></div>    
            <div class="repeatR"></div>
            <div class="bB"></div>
        </div>
    </div>
    <div class="historyframe">
        <div class="bottom">
            <div class="repeat"></div>
        </div>
    </div>
</div><!-- #container -->
