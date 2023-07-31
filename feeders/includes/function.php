<?php
session_start();
$result;

function userExist($connect, $phonenumber, $password){
    $query = "SELECT * FROM member_login WHERE phone_number = ? AND `password` = ?;";
    $stmt = mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt, $query)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $phonenumber, $password);
    mysqli_stmt_execute($stmt);
    $getResult = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($getResult)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}
function loginUser($connect, $phonenumber, $password){
    $existingUser = userExist ($connect, $phonenumber, $password);
    if ($existingUser !== false){
        $_SESSION["phonenumber"] = $existingUser["phone_number"];
        $_SESSION["pass"] = $existingUser["password"];
        header("location: ../public/dashboard.php?success=successful");

    }
}