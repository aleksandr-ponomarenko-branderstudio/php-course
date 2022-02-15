<?php

function divider($num){
    for($i = 1; $i <= $num; $i++){
        if($num % $i === 0){
            $arreyDevider[] = $i;
        }
    }
    return $arreyDevider;
    
}


$arreyDevider[] = divider(21);
print_r($arreyDevider);

?>

