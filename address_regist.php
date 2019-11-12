<?php
include "config.php";
$id="";
if($_GET["id"]){
    $sql= "SELECT from user Where IDuser = '$id'";
    $return = mysqli_query($con,$sql);
}
if($return){
    print_r($sql);
}



?>