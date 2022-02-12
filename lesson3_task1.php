<?php
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$num3 = rand(1, 10);
$numMax = null;
$numMin = null;
$numEq = false;

echo $num1, '/ ', $num2, '/ ', $num3;
//наибольшее
if(($num1 > $num2)&&($num1 > $num3)){
    $numMax = $num1;
}elseif(($num2 > $num3)&&($num2 > $num1)){
    $numMax = $num2;
}elseif(($num3 > $num1)&&($num3 > $num2)){
    $numMax = $num3;
}
//наименьшее
if(($num1 < $num2)&&($num1 < $num3)){
    $numMin = $num1;
}elseif(($num2 < $num3)&&($num2 < $num1)){
    $numMin = $num2;
}elseif(($num3 < $num1)&&($num3 < $num2)){
    $numMin = $num3;
}
//равные
if(($num1 == $num2)||($num1 == $num3)){
    $numEq = $num1;
}elseif($num2 == $num3){
    $numEq = $num2;
}

echo "\n", 'Наибольшее значение:', $numMax;
echo "\n", 'Наименьшее значение:', $numMin;
if($numEq == true){
 echo "\n", 'Первое из равных значений:', $numEq;
}else{
    echo "\n", 'Нет равных значений';
}

?>

