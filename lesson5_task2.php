<?php
function symbolCycleOutput(string$str, string$sym){
    $i = iconv_strlen(trim($str));
    while($i != 0){
        echo $sym;
        $i -= 1;
    }
}
