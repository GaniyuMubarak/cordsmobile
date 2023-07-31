<?php
if (isset($_POST["loginbtn"])){
    echo "welcome user";
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["pass"];

    require_once "database.php";
    require_once "function.php";

    if(userExist($connect,$phonenumber,$password) === false){
        header("location: ../public/index.php?error=wronguser");
        exit();
    }

    loginUser($connect, $phonenumber, $password);

}else{
    header("wrong input");
}

