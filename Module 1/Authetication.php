<?php

define("USERNAME", "admin");
define("PASSWORD", "12345");

echo"Enter Username: ";
$username =readline();

echo"Enter Password: ";
$password =readline();

if(empty($username) || empty($password)){
  echo"Username or Password is Blank. \n";
}else{
    if($username === USERNAME && $password === PASSWORD){
        echo"Login Succesful. \n";
    }else{
        echo"Invalide Username or Password.";
    }
}