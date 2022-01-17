<?php

?>
<?//print_r(brevis\controller\YandexStategy::getColorTable());?>


<h2>Тип устройств, с которых были переходы за отчетный период</h2>
<div  class="my-5" style="width:100%;height:300px;">
<canvas id="<?=$arResult["ID"]?>deviceCategory" style="width:100%;height:100%;" ></canvas>
</div>

<?php
$arRes = Array();
foreach( $arResult['RESULT'] as $res ){
    $arRes[] = $res[0];
}
$arrayProperties =  CUtil::PhpToJSObject(
    Array( 
        "values"    =>  array_values($arRes),
        "labels"    =>  array_keys( $arResult['RESULT'] ),
        "colors"    =>  brevis\controller\YandexStategy::getColorTable()
    ) 
);
?> 
<script>
document.addEventListener( 'DOMContentLoaded' , function(){
    deviceCategory(<?=$arResult["ID"]?>,<?=$arrayProperties?>);
});
</script>
<table class="table">
<tr>
    <th>№ 	</th>
    <th>Тип устройства</th> 	
    <th>Визиты 	</th>
    <th>Посетители 	</th>
    <th>Отказы 	</th>
    <th>Глубина просмотра</th> 	
    <th>Время на сайте</th>
</tr>
<?$j=1;?>
<?foreach( $arResult['RESULT'] as $name=>$resArr ):?>
<tr>
    <td><?=$j++?></td>
    <td><?=$name?></td>
    <?foreach($resArr as $val):?>
        <td><?=$val?></td>
    <?endforeach;?>
</tr>
<?endforeach;?>
</table>
<hr>
 
 