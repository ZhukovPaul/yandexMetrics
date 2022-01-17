

<h2>Популярные посадочные страницы по всем источникам</h2>
<table class="table">
<tr>
    <th>№</th>
    <th>URL</th>
    <th>Визитов</th>
</tr>
<?$i=1;?>
<?foreach($arResult["RESULT"] as $title=>$row):?>
    <?if($i > 6) continue;?>
<tr>
    <td><?=$i++?></td>
    <td><a href="<?=$title?>"><?=$title?></a></td>
    <td><?=$row[0]?></td>
</tr>
<?endforeach;?>
</table>