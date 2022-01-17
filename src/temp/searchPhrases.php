<?php

?>
<h2>Популярные поисковые фразы</h2>
<table class="table">
    <tr>
        <th>№</th>
        <th>Фраза</th>
        <th>Визитов</th>
    </tr>
    <?$i=1;?>
    <?foreach($arResult["RESULT"] as $key=>$row):?>
        <?if($i > 6) continue;?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$key?></td>
            <td><?=$row?></td>
        </tr>
    <?endforeach;?>
</table>