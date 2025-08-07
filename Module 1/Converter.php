<?php

// C/5 = F -32 /9

define("FACTOR", 9/5);
define("OFFSET", 32);

echo"Enter Temperature Value: ";
$temperature =(float)readline();


echo"convert to (1: Fahrenheit 2: celcius): ";
$choice =(int)readline();

Switch($choice){
    case 1:
        $result = $temperature * FACTOR + OFFSET;
        echo"Temperature in Fahrenheit: $result\n";
        break;
    case 2:
        $result = ($temperature - OFFSET) / FACTOR;
        echo"Temperature in Celcius: $result\n";
        break;

    default :
        echo"Invalide Choice\n";
        break;    
}

