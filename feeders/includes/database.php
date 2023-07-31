<?php

$connect = mysqli_connect('localhost:3308', 'root', '', 'cordsmobile');

if(!$connect){
    die('Connection Failed' . mysqli_connect_error());
}else{
    echo 'Welcome to my database';
}
// $connection = mysqli_connect('localhost', 'root', ' ', 'cordsmobile');

// if(!$connection){
//     die('Connection Failed' . mysqli_connect_error());
// }else{
//     echo 'Welcome to my database';
// }