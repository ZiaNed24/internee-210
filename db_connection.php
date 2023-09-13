<?php
function connection(){
    $host="localhost";
    $user="root";
    $pass="";
    $db="meet";
    $conn=mysqli_connect($host,$user,$pass,$db);
    return $conn;
}
function query_exec($query){
    $conn=connection();
    $result=mysqli_query($conn,$query);
    return $result;
}
function redirect($page){
    echo"<script>location.href='$page'</script>";
}
?>