<?php
$randomNumber = rand(1, 100);
if($randomNumber % 2){
    echo "\n", $randomNumber,' - even';
}else{
    echo "\n",$randomNumber, ' - odd';
}
?>
