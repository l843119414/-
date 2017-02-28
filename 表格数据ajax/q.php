<?php
$a = $_POST['number1'];
$b = $_POST['number2'];
$c = $_POST['number3'];
$d = "2,3,5,7,11,17,19,23,29,31,41,43,47,53,59,67,71,73,79,83,89,97";
$num = $a + $b + $c;
$d_arr = explode(',',$d);
if($num<=100){
if(in_array($num,$d_arr)){
      echo  "$num ,是质数";
}else{
    echo "$num ,不是质数";
}}else{
    echo "$num ,大于100";
}
?>