<?php

$age=52;

//switch ($age) {
//    case 50:
//        echo'age is 50';
//        break;
//    case 51:
//        echo'age is 51';
//        break;
//    case 52:
//        echo'age is 52';
//        break;
//    default:
//        echo'age is unknown';
//}


$result = match($age){
  50=>'age is 50',
  51=>'age is 51',
  52=>'age is 52',
  default=>'age is unknown'
};

echo $result;
echo"\n";