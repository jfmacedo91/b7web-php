<?php
echo "<h1>Formatando Data</h1>";
$date = '2023-05-13';
echo ucwords(strftime('%d.%m.%Y - %A', strtotime($date)));
?>