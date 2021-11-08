<?php
$arr = [23,45,1,34,43,67,8];
$minValue = $arr[0];
for ($i = 0; $i < count($arr); $i++){
    if ($arr[$i] < $minValue){
        $minValue = $arr[$i];
    }
}
echo $minValue;
