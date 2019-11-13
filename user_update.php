<?php
            include "config.php";

            if("user_update.php"==true){
                    $id=$_GET["ID"];
                    $nome=$_POST["name"];
                    $hobbies=$_POST["hobbies"];
                    $telemovel=$_POST["telemovel"];
                    $email=$_POST["email"];
                    $password=$_POST["password"];
                        $sql="UPDATE `user` 
                        SET `IDuser`='$id',
                         `nome`='$nome',
                        `hobbies`='$hobbies',
                        `telemovel`='$telemovel',
                        `email`='$email',
                        `password`='$password',";
                        if(!mysqli_query($con,$sql)){
                        echo"check query";
                        }
                        else{
                    header("location:index.php");
                    }
            }
                header("location:index.php");
?>