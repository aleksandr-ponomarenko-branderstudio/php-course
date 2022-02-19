<?php
function simile($str1, $str2){
    similar_text(trim($str1), trim($str2), $perc);  
    return "$perc%";
}
