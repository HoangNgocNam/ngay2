<?php
$arr = [
    [1,2,4,5],
    [3,5,6,7],
    [2,4,6,8]
];
$max = $arr[0][0];
for ($i = 0; $i < count($arr); $i++){
    for ($j = 0; $j < count($arr[$i]); $j++){
        if ($arr[$i][$j] > $max){
            $max = $arr[$i][$j];
        }
    }
}
echo $max;
