<?php
function findAndReplace($str, $sym){
    return str_replace($sym, strtoupper($sym), $str); 
}
