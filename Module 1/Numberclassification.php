<?php

echo"Enter a Number: ";

$number=(int)readline();

if($number>0){
  echo"The Number is Positive. \n";
}elseif($number<0){
  echo"The Number is Nagative. \n";
}else{
    echo"The Number is Zero.";
}
