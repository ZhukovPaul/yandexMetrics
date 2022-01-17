<?php
$arrayProperties =  CUtil::PhpToJSObject(
    Array( 
        "values"    =>  Array($arResult["RESULT"]["GA_USERS"],$arResult["RESULT"]["GA_SESSIONS"],$arResult["RESULT"]["GA_PAGE_VIEWS"]),
        "labels"    =>  Array("Посетители","Визиты","Просмотры"),
    ) 
);
?> 
<script>
document.addEventListener( 'DOMContentLoaded' , function(){
    totalAttendanceBehavioral(<?=$arResult["ID"]?>, <?=$arrayProperties?>);
});
</script>
<div height="400" style="width:100%;height:400px;">
<canvas id="<?=$arResult["ID"]?>totalAttendanceBehavioral"   style="width:100%;height:100%;" ></canvas>
</div>
<div class="row">
<div class="col-4 text-center py-3">Количество посетителей<br><b><?=$arResult["RESULT"]["GA_USERS"]?></b></div>
<div class="col-4 text-center py-3">Количество визитов<br><b><?=$arResult["RESULT"]["GA_SESSIONS"]?></b></div>
<div class="col-4 text-center py-3">Количество просмотров<br><b><?=$arResult["RESULT"]["GA_PAGE_VIEWS"]?></b></div>
<div class="col-4 text-center py-3">Глубина просмотра<br><b><?=$arResult["RESULT"]["GA_PAGE_VIEWS_PER_SESSION"]?></b></div>
<div class="col-4 text-center py-3">Длительность визита<br><b><?=$arResult["RESULT"]["GA_AVG_SESSION_DURATION"]?></b></div>
<div class="col-4 text-center py-3">Показатель отказов<br><b><?=$arResult["RESULT"]["GA_BOUNCE_RATE"]?></b></div>
 
</div>