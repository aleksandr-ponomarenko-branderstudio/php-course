<?php
function primeNumber($num){
        if ($num > 1){
            for ($div = 2; $div < $num; $div++){
                if ($num % $div === 0){
                    echo 'Число не простое';
                    return;
                }
                else{
                    echo 'Число простое';
                }
            }
        }
        else {
            echo 'Число простое';
        }
}

$num = rand();
primeNumber($num)
?>

