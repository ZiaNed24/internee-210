<?php

session_start();
require_once("model/crud.php");
require_once("model/helpermethod.php");

if(isset($_POST["submit"])){
$name=$_POST["username"];
$pass=$_POST["password"];


$result = insert_row("users",array("username"=>$name,"password"=>$pass));
if($result){

        redirect("login.php");}
   

else{
    echo"error";
}


}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Bug Tracking System</title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Register</h2>
            <form action="index.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button name="submit" type="submit">Register</button>
                <p>For Login <a href="login.php">Login</a></p>
            </form>
        </div>
        
    </div>
</body>
</html>
