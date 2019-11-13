<?php

   $con=mysqli_connect("localhost","root","","crude");
   if(!$con){
       echo "conection failed";
   }
   else{"";}

    if(isset($_POST["inserirmorada"])){
        $distrito=$_POST["distrito"];
        $cidade=$_POST["cidade"];
        $concelho=$_POST["concelho"];
        $rua=$_POST["rua"];
        $cp=$_POST["cp"]; 
    }    
    $insert = "INSERT INTO address(IDaddress,distrito, cidade, concelho, rua, cp) VALUES('','$distrito','$cidade','$concelho','$rua','$cp')";
    $return=mysqli_query($con,$insert);
    if($return){
        header("Location:index.php");
    }
    ?>
    
