<?php
$userNum_1 = rand(1, 10);
$userNum_2 = rand(1,15);
$userNum_3 = rand(1,20);

function greaterNumber($num_1, $num_2, $num_3) {
    $result = $num_1;
    if ($result <= $num_2){
        $result = $num_2;
    }
    if ($result <= $num_3){
        $result = $num_3;
    }
    return $result;
}
echo $userNum_1, '/', $userNum_2, '/', $userNum_3, "\n"; 

echo greaterNumber($userNum_1, $userNum_2, $userNum_3);

?>

