<?php
$numberRandom = rand(1, 50);

switch($numberRandom){
    case 1:        
    case 2:       
    case 3:      
    case 4:       
    case 5:
        echo $numberRandom, " - Odd";
        break;
    case 10:     
    case 20:
    case 30:
    case 40:
    case 50:  
        echo $numberRandom, " - Even";
        break;  
    default:
    echo 'Ooops';    
}
?>
