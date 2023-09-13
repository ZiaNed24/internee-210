<?php
session_start();

require_once("model/crud.php");
require_once("model/helpermethod.php");
//$conn=mysqli_connect("localhost","root","","2103g1");

$error_message="";


if(isset($_POST["submit"]))
{
    $var_passwords=$_POST["pass"];
    $var_email=$_POST["name"];
    $result=fetch_row("users", array("password"=>$var_passwords,"username"=>$var_email));
    if(mysqli_num_rows($result)>0){
        $rows=mysqli_fetch_assoc($result);

            if($rows["username"]==$var_email && $rows["password"]==$var_passwords){
			
            $_SESSION["mid"]=$rows["id"];
			$_SESSION["user"] = $rows["roll"];
            redirect("dashboard.php");
		
	    }
        
	    }
        else{
            $error_message="Invalid Email And Password";
        }
        
    
}



?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <input type="text" name="name" placeholder="Username" required>
                <input type="password" name="pass" placeholder="Password" required>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
