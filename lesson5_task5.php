<?php
function passwordСheck($password){

    $symbolsInString = (boolean) strpbrk( 
        $password, <<<'sym'
        '!@#$%^&*`~^><\()_-+=/";                   
        sym                                             
    );  //bool
    $numbersInString = (boolean) strpbrk($password, '1234567890'); //bool
    $symQuan = strlen($password); //int
     
    $result = ''; 

    if ($symQuan > 8 && $numbersInString && $symbolsInString){
        $result = "Сложный";
    }
    else if ($symQuan >= 8 && $numbersInString){
        $result = "Нормальный";
    }
    else if ($symQuan <= 8 || $numbersInString){
        $result = "Простой";
    }        
}
