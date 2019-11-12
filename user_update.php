<?php

include "config.php";
if(isset($_GET["edit"])){
    $id = $_GET["edit"]; 
}
$nome="";
$hobbies="";
$telemovel="";
$email="";
$password="";
?>
<html>
<link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
<div class="container">

    <body>
        <a href="index.php" class="button">Home</a>
        <form method="POST">
            <p>
                <label for="nome">Nome : </label>
                <input type="text" name="name" placeholder="introduza nome" required id="name">
            </p>
            <p>
                <label for="hobbies">Hobbies : </label>
                <textarea name="hobbies" id="" cols="15" rows="5"></textarea>
            </p>
            <p>
                <label for="telemovel">Telemovel : </label>
                <input type="telemovel" name="telemovel" placeholder="introduza telemovel" required class="name">
            </p>
            <p>
                <label for="email">Email : </label>
                <input type="email" name="email" placeholder="introduza email" required id="email">
            </p>
            <p>
                <label for="password">Password : </label>
                <input type="password" name="password" placeholder="introduza password" required id="password">
            </p>
            <input type="submit" value="Update" name="update" class="button">
            <?php
            if(isset($_POST["submit"]){
                $nome=$_POST["nome"];
                $hobbies=$_POST["hobbies"];
                $telemovel=$_POST["telemovel"];
                $email=$_POST["email"];
                $password=$_POST["password"];
            }

            $update = "UPDATE FROM user SET nome='$nome', hobbies='$hobbies', telemovel='$telemovel', email='$email', password='$password'
            WHERE IDuser = '$id')";
            $result = mysqli_query($con,$update);
            if($result){       
                echo $update;   
            }
            ?>
    </body>
</div>

</html>