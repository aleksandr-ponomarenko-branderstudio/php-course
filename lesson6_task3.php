<?php
function arrayPrint($myArray){
    foreach($myArray as $kay => $array){
        foreach($array  as  $innerKey => $value){
            echo $value, PHP_EOL;
        }
        foreach($array as $innerKay => $innerArray){
            foreach($innerArray as $innerInnerKay => $value1){
                echo $value1, PHP_EOL;
            }
        }
    }
};