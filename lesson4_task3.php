<?php
function primeNumber($num, $div = 2){
    if ($num % $div === 0){
        echo 'Число не простое';
        return;
        primeNumber($num, $div++);
    }
    else{
        echo 'Число простое';
    }
    
}
$uNum = rand(1, 100);
echo $uNum, "\n";
primeNumber($uNum);
primeNumber($num)
?>

