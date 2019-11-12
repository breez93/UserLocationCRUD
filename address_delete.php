<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crude";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
}


if("address_delete.php"==true){
    $id=$_GET["delete"];
    $delete="DELETE FROM `address` WHERE `IDaddress`";
    $resultdelete=mysqli_query($conn,$delete);   
    $_SESSION["message"]="Data has been deleted";
    $_SESSION["msg_type"]="danger";
    header("location:index.php");

}
?>