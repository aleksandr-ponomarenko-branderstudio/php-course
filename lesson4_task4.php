<?php
function divider($num){
    $div = 1;
    for($i = 1; $i <= $num; $i++){
        if ($i == 1 || $i == $num){
            
        }
        elseif($num % $i === 0){
            $div = $i;
            echo $div, "\n";
        }
        
    }
}

divider(21)
?>

