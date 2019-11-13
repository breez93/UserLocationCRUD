<?php
include "config.php";
$id=$_GET["delete"];

   if("addressdelete"==true){
    $sql = "DELETE from address where IDaddress = '$id'";
    $resultdelete=mysqli_query($con,$sql);  
    
}  
    if(!$resultdelete){
        echo "check query";
    }
    else{
        header("location:index.php?Entrada de morada apagada com sucesso");
    }
?>