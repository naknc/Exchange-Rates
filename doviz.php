<style>
    table tr td { padding: 5px 10px; border: 1px solid gray;}
</style>

<?php 
    $jsonVeri = file_get_contents("https://www.doviz.gen.tr/doviz_json.asp?version=1.0.4");
    $veri = json_decode($jsonVeri, 1);
?>

<table cellspacing="0">
    <tr>
        <td>Döviz</td>
        <td>Alış</td>
        <td>Satış</td>
    </tr>
    <tr>
        <td>Dolar</td>
        <td><?=$veri["dolar2"]?></td>
        <td><?=$veri["dolar"]?></td>
    </tr>
    <tr>
        <td>Euro</td>
        <td><?=$veri["euro2"]?></td>
        <td><?=$veri["euro"]?></td>
    </tr>
</table>