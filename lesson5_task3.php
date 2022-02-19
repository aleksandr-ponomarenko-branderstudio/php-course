<?php
function pyramid(string$sym = '#', int$num = 5){
    for($i = 0; $i <= $num; $i++){
        echo str_repeat($sym, $i), "\n";
    }
} 
