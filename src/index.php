<?php
    
$randomArray = [];

echo '<pre>';

for ($i = 0; $i < 1000; $i++) {
    $var = [mt_rand(0, 100)];
    print_r($var);
    $randomArray = array_merge($randomArray, $var);
}

var_dump($randomArray);