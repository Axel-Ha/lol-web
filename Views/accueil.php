<?php

$file = 'C:\wamp64\www\php\League_of_legends\Data\champion.json';
$data= file_get_contents($file);
$obj = json_decode($data,true);
print_r($obj["data"]["Aatrox"]);


foreach($obj["data"] as $key){
    print_r($key["name"]);
    echo "        ";
}



// echo $obj[6]






?>