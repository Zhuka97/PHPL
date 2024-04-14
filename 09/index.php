<?php


$arr = array('belya',1);

$arr2 = ['Zhenya', 'Marina', ['banan', 'apple']];
$arr3 = [2 =>'Zhenya', 'human'=>'Marina', 'Belya'];
$arr2[2]= 'kiwi';
echo "<pre>";
print_r($arr);
print_r($arr2[2][0]);///банан
print_r($arr2);
print_r($arr3);
echo "</pre>";
