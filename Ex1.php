<?php
$arr1 = array[];
$arr2 = array[];
for($i=0;$1<21;$i++){
    if($i%2=0){
        echo "$i is Even <br>";
        $arr1[$i/2]=$i;
    }
    else{
        echo "$i is Odd<br>";
    }
}

echo"<h3?>2's array</h3>";
foreach($arr1 as $value){
    if($value =0){}
    else echo $value.""
;}

for($i=0;$i<51;$i++){
    if(($i%5==0)){
        echo "$i is Even <br>";
    }
    else echo "$i is Odd<br>";
    $arr2[$i/5]=$i;
}


