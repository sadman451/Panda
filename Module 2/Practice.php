<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center";>Welcome to my PHP Journey</h2>

    <?php
 
      // $a=2;

     //  for($a;$a<=100;$a=$a+2)
      //  {
     //   echo $a. '<br>';
    //    }

    echo"<h2>End for Loop</h2>";

   // $x=2;
   // while($x <=10)
   // { 
   //     print"$x <br>"; 
    //    $x += 2;
   // }


   // $fruits=['Mango','Banana','Apple'];

    //    print $fruits[0]."<br>";
    //    print $fruits[1]."<br>";
    //    print $fruits[2]."<br>";

    //    foreach($fruits as $a){
    //       echo "$a<br>";
    //    }



   // $numbers=['70','80','90'];

   // function average($numbers){
     //  foreach($numbers as $k=>$nums){
     //     echo'key'.$k."-".$nums;
     //     echo'<br>';
     //     echo$k."-"/$nums;

    //   }
   // }

   // average($numbers);

$total = 0;
$count = 0;

$numbers = [80, 75, 90, 85];
function average($numbers){

foreach ($numbers as $num){
    $total += $num;$count++;
     }

    $average =$total / $count;

    echo "Average: " .$average;
}


//average($numbers)


//function perameter: $a as receiver

// $numbers=['1','5','3','6'];

// function addition($a){
//     $result=0;

//     foreach($a as $v){
//       $result=$result + $v;
//     }

//     echo 'Result is: ' . $result;
// }

//calling a function: $numbers send as argument



// addition($numbers)









    
    
    ?>
    
</body>
</html>