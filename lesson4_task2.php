<?php
function weekDay(int $day){
    $week= [1 => 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sut', 'Sun'];
    echo ($day <= 7)? $week[$day] : 'Error';
}

$day = rand(1, 10);

echo $day, "\n";

weekDay($day)
?>

