<?php 
   $con=mysqli_connect("localhost","root","","crude");

   if(!$con){
       echo "conection failed";
   }
   else{"";}

    if(isset($_POST["insert"])){
        $nome=$_POST["name"];
        $idade=$_POST["idade"];
        $telemovel=$_POST["telemovel"];
        $login=$_POST["email"];
        $pass=$_POST["password"]; 

    }    
    $edit = "INSERT INTO user(nome, idade, telemovel, email, password)
    VALUES ('$nome','$idade','$telemovel','$login','$pass')";
    
    $return=mysqli_query($con,$edit);
    if($return){
        header("Location:index.php");
    }
    ?>
    
