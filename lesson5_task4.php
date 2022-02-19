<?php
function reverseString(string$str){
    $reverceStr = '';
    $i = strlen($str);
    while ($i > -1){
        $reverceStr .= $str[$i];
        $i -= 1;
    }
    return $reverceStr;
}
