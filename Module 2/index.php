<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Hi, Welcome to <u>PHP</u> Practice Session</h1>


    <?php
       for($a = 2; $a <=10; $a= $a +2)
       {
        echo $a. '<br>';
       }

    echo"<h2>End Of For Loop</h2>";

    $x =2;
     while($x <= 50)
     {
        echo $x.'While Loop <br>';
        $x++;
     }

     echo"<h2>End Of While Loop</h2>";

     $i =3;
     do{
        print "Do Body With V $i";
     }while($i < 3);

     
     // dynamic function 

     function greetings($massege){
        echo"<h2 style='color:tomato'>". $massege ."</h2>";
     }
    $mymassege= 'Welcome to PHP Class';
    greetings($mymassege);



    for($k=1; $k <=15; $k++){

      if($k==12){        //checking break and continue
         break;
      }

      echo'<h3>Print'.$k.'</h3>';
    }

    echo"<h2 style='border:1px solid black'>After loop</h2>";


      $colors=['red', 'blue', 'pink'];

      print"<pre>";
      print_r($colors);
      print"</pre>";

        foreach($colors as $p=>$a){ 
            echo'key '.$p. "-".$a;
            echo'<br>';
        }
   

    ?>


</body>
</html>