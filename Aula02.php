<?php

//FOR
for ($i = 0; $i <= 10; $i++) {
    echo "numero da linha: $i <br>";
  }
  


//WHILLE
$i = 0;
while ($i <= 10) {
    echo "numero da linha $i <br>";
     $i++; 
}
//DO WHILE
$i = 0;
do{
    echo "numero da linha $i <br>";
    $i++;
}
while( $i < 10);

//IF
if (5 > 10){
    echo "Cinco maior que dez";
}else{
    echo "Cinco não é maior que dez <br><br>";
}

//SWITCH
$i = 1;

switch ($i) {
    
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda";
        break;
    case 2:
        echo "Terça";
        break;
    case 3:    
        echo "Quarta";
        break;
    case 4:    
        echo "Quinta";
        break;
    case 5:    
        echo "Sexta";
        break;
    case 6:    
        echo "Sabado";
        break;
    default:
        echo "Valor invalido";    

}



//DOCUMENTAÇÃO DO PHP FICA: http://php.net
