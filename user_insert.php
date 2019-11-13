<?php 
   $con=mysqli_connect("localhost","root","","crude");

   if(!$con){
       echo "conection failed";
   }
   else{"";}
    if(isset($_POST["inseriruser"])){
        $nome=$_POST["name"];
        $hobbies=$_POST["hobbies"];
        $telemovel=$_POST["telemovel"];
        $login=$_POST["email"];
        $pass=$_POST["password"]; 
    }    
    $insert = "INSERT INTO user(nome, hobbies, telemovel, email, password)
    VALUES ('$nome','$hobbies','$telemovel','$login','$pass')";
    $return=mysqli_query($con,$insert);
    if($return){
        header("Location:index.php?Novo user introduzido, porfavor visite o seu perfil");
    }
?>