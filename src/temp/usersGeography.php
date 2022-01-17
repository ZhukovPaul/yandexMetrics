 <?php
 
$arValues = Array();
$arNames = Array();
foreach( $arResult['RESULT']['TOTALS'] as $k=> $res ){
    if( $k > 5 ) continue;
    $arValues[] = $res["END"];
    $arNames[]  = $res["CURENT"];
}
$arrayProperties =  CUtil::PhpToJSObject(
    Array( 
        "values"    =>  $arValues,
        "labels"    =>  $arNames,
    ) 
);
?> 
 <?$arResult['RESULT']['TOTALS'] = array_slice($arResult['RESULT']['TOTALS'] ,0,5);?>
 <div class="clearfix"></div>
 <div class="row">
    <div class="col-12">
        <div  style="width:100%;height:300px;">
            <canvas id="<?=$arResult["ID"]?>usersGeography" style="width:100%;height:100%;" ></canvas>
        </div>
        <div class="col-12">
        <table class="table">
<tr>
    <th>Город</th>
    <th>Визиты 	</th>
    <th>Посетители 	</th>
    <th>Отказы 	</th>
    <th>Глубина просмотра</th> 	
    <th>Время на сайте</th>
</tr>
    <?foreach( $arResult['RESULT']['TOTALS'] as $k=>$val ):?>
    <?if($k == 5):?><?continue;?><?endif;?>
    <tr>
        <td><?print $val["CURENT"];?></td>
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
    usersGeography(<?=$arResult["ID"]?>,<?=$arrayProperties?>);
});
</script>
</div >