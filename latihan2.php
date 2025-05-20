<?php
 header('content-type: application/json');
 $data = file_get_contents('coba.json');
 $menu_pitzza = json_decode($data, true);

 var_dump($menu_pitzza);
 echo $menu_pitzza[0]["Jumlah"];
?>