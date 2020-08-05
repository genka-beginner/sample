<?php
//課題１
function double($i){
    $i=$i*2;
    return $i;
}

echo double(3);
echo "\n";

//課題２
function f($a,$b){
    $result=$a + $b;
    return $result;
}

echo f(1,3);
echo "\n";

//課題３

$arr = array(1, 3, 5 ,7, 9);
function ar($arrays){
    $result2 = 1;
    foreach($arrays as $array){
        $result2 *=$array; 
    }
    echo $result2;
}

echo ar($arr);
echo "\n";

//課題４
$max_number = 0;
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

 echo max_array($arr);
 echo "\n";

//課題５
//strip_tags
$tag = "<p>タグを取り除きます</p>";

echo strip_tags($tag);
echo "\n";

//array_push=配列に値を追加
array_push($arr,3,5);
foreach($arr as $arr2){
    echo $arr2 . "\n";
}

echo "\n";

//array_merge=配列の結合
$arr3 = array(1, 2, 3, 4);
$arr4 = array(5, 6, 7, 8); 
$arr5 = array_merge($arr3,$arr4);
print_r($arr5);

echo "\n";
//time, mktime
$t_1 = mktime(0,0,0,8,4,2020);

$t_2 = time($t_1);

echo 'UNIXタイムスタンプ' . "\n";
echo $t_2 . "\n";

//date
echo date('y/m/d',$t_1) . "\n";
echo "\n";
 
 