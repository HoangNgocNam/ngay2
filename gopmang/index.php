<?php
$arr1 = [1,2,3,4,5,8];
$arr2 = [4,45,67,23,56];
$arr = [];
for ($i=0;$i<count($arr1);$i++){
    array_push($arr,$arr1[$i]);
}
for ($i=0;$i<count($arr2);$i++){
    array_push($arr,$arr2[$i]);
}
var_dump($arr);
