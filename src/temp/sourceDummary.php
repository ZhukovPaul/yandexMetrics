<?php

 
$arrayProperties =  CUtil::PhpToJSObject(
    Array( 
        "values"    =>  array_values($arResult['RESULT']['TOTALS']),
       // "labels"    =>  array_keys($arResult['RESULT']['TOTALS']),
    ) 
);
?> 
 

 <div class="row">
    <div class="col-12"  >
        <div style="height:350px;" class="my-4">
            <canvas id="<?=$arResult["ID"]?>sourceDummary"  style="width: 100%; height: 100%; display: block;"></canvas>
        </div>
    </div>
    <div class="col-12"  >
<table class="table">
<tr>
    <th>Источник</th>
    <th>Визиты 	</th>
    <th>Посетители 	</th>
    <th>Отказы 	</th>
    <th>Глубина просмотра</th> 	
    <th>Время на сайте</th>
</tr>
    <?foreach( array_keys($arResult['RESULT']['TOTALS']) as $k=>$val ):?>
    <tr>
        <td><?=$val?></td>
        <?foreach($arResult['RESULT']["TABLES"][$k] as $value ):?>
        <td><?=round($value,2)?></td>
        <?endforeach;?>
    </tr>
    <?endforeach;?>
</table>
</div>

</div>
<script>
 

document.addEventListener( 'DOMContentLoaded' , function(){
    sourceDummary(<?=$arResult["ID"]?>,<?=$arrayProperties?>);
});
</script>