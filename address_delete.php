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
    $delete="DELETE FROM `address` WHERE ;
    =''";
    $resultdelete=mysqli_query($conn,$delete);   
    header("location:index.php");
}
?>