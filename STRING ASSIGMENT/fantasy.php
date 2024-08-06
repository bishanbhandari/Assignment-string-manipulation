<?php
$name="Gandalf,Aragorn,Legolas";//
$arr=explode(",",$name);//Convert string to array using comma
$arrlower=array_map('strtolower',$arr);// is used to apply a callback function to each element of an array
$arrjoin=implode('*',$arrlower);//Join the array elements into a single string with *
echo"$arrjoin";
?>