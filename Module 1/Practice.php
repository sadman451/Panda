<?php

//$age =4;

//if($age >=18){
//    echo"You Can Vote. \n";
//}else{
//    echo"You Cannot Vote. ";
//}

//$mark =49;

echo"Enter Your Mark: ";
$mark = trim(fgets(STDIN));

if($mark >=80){
    echo"Grade: A+ \n";
}elseif($mark >=70){
    echo"Grade: B \n";
}elseif($mark >=60){
    echo"Grade: C \n";
}elseif($mark >=50){
    echo"Grade: D \n";
}else{
    echo"Fail";
}