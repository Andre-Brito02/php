<?php

$contador = 0;

while($contador < 100){
    if($contador %2 != 0)
       echo "$contador". PHP_EOL;
    $contador++;
}