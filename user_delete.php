<?php

if(isset($_GET["delete"])){
    $id=$_GET["delete"];
    $sqldelete="DELETE from user where IDuser='$id'";
    $resultdelete=mysqli_query($conn,$delete);   
    header("Location:index.php");
}
?>