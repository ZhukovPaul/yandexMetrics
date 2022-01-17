<?php
$colorsAr = brevis\controller\YandexStategy::getColorTable();
$arrayProperties =  CUtil::PhpToJSObject(
    Array( 
        "values"    =>  array_values($arResult['RESULT']),
        "labels"    =>  array_keys($arResult['RESULT']),
        "colors"    =>  $colorsAr,
    ) 
);
?>
<h2 class="text-center mt-5">Поисковые системы </h2>
 <div class="row my-5  ">
    <div class="col-6"  >
       <div style="height:400px;">
        <canvas id="<?=$arResult["ID"]?>searchEngines" style="width: 100%; height: 100%; display: block;" ></canvas>
       </div> 
       
    </div>
    <div class="col-6 pt-5 mt-5 pl-4"  >
    <?$k = 0 ;?>
       <?foreach($arResult['RESULT'] as $name=>$value ):?>
       <p class="mb-3 "><span class="px-2 roundeds mr-2" style="background-color:<?=$colorsAr[$k++]?>"></span><?=$name?> <b class="float-right"><?=$value?></b></p>
       <?endforeach;?>
    </div>
</div>

<script>
 

document.addEventListener( 'DOMContentLoaded' , function(){
    searchEngines(<?=$arResult["ID"]?>,<?=$arrayProperties?>);
});
</script>