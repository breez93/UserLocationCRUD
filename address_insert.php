<?php
     include "config.php";

    if(isset($_POST["inserirmorada"])){
        $id=$_GET["IDuser"];
        $distrito=$_POST["distrito"];
        $cidade=$_POST["cidade"];
        $concelho=$_POST["concelho"];
        $rua=$_POST["rua"];
        $cp=$_POST["cp"]; 
    }
    $insert = "INSERT INTO address ('IDaddress',distrito, cidade, concelho, rua, cp) VALUES('$id','$distrito','$cidade','$concelho','$rua','$cp')";
    $return=mysqli_query($con,$insert);
    if(!$return){

       echo "check your code";

    }
    else{
        header("location:index.php");
    }
    ?>