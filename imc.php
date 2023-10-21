<?php

$peso = 90.0;
$altura = 1.80;
$imc = $peso/($altura**2);

if($imc >= 40){
    echo "IMC = $imc e Nível = Obesidade grau III". PHP_EOL;
}

else if($imc >= 35 and $imc <= 39.9){
    echo "IMC = $imc e Nível = Obesidade grau II". PHP_EOL;
}

else if($imc >= 30 and $imc <= 34.9){ 
    echo "IMC = $imc e Nível = Obesidade grau I". PHP_EOL;
}   

else if($imc >= 25 and $imc <= 29.9){
    echo "IMC = $imc e Nível = Sobrepeso". PHP_EOL;
}

else if($imc >= 18.5 and $imc <= 24.9){ 
    echo "IMC = $imc e Nível = Peso normal". PHP_EOL;
}

else{
    echo "IMC = $imc e Nível = Baixo peso". PHP_EOL;   
}