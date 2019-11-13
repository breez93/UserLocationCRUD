<?php
session_start();
$con=mysqli_connect("localhost","root","","crude");
if(!$con){
    echo "conection failed";
}
else{"";}