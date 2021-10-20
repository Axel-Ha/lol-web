<?php

$obj = json_decode(file_get_contents('http://ddragon.leagueoflegends.com/cdn/11.20.1/data/en_US/champion.json'),true);

$index = 0;
    foreach($obj["data"] as $cle => $value)
    {    
        $info_personnage[$cle] = $value;
        $index++;
    }
    var_dump($info_personnage);
?>