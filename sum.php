<?php
//課題1
function number($max){
    return $max*2;
}
echo number(2);

//課題2
function sum_number($a,$b){
    return $a+$b;
}
echo "\n".sum_number(1,2);

//課題3
function kakeru($arr){
    $number=1;
    foreach($arr as $a){
        $number*=$a;
        echo $number."\n";
    }
    return $number;
}
echo "\n".kakeru(array(1,3,5,7,9));

//課題4
function max_array($arr){
    $max_number=$arr[0];
    foreach($arr as $a){
        if($max_number<$a){
           $max_number=$a;
       }
       echo $max_number."\n";
    }
    return $max_number;
}
echo "\n".max_array(array(5,4,2,3,8,4));

//課題5 strip_tags
$a="<h1><p>テスト</p></h1>";
echo "\n".strip_tags($a,"<h1>")."\n";

//array_push
$number=array(10,20,30);
array_push($number,40,50);
print_r($number);

//array_merge
$a=[1,2,3];
$b=[4,5,6];
$c=[7,8,9];
$array=array_merge($a,$b,$c);
print_r($array);

//time,mktime
echo "\n".time();
$time=mktime(1,30,30,11,24,2021);
echo "\n".$time;

//date
$date=strtotime('+1 day');
echo "\n".date('Y年m月d日H時i分s秒',$date);