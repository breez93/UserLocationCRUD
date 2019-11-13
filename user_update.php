<?php
        include "config.php";
        if(isset($_POST["update"])){
                $id=$_GET["ID"];
                $nome=$_POST["name"];
                $hobbies=$_POST["hobbies"];
                $telemovel=$_POST["telemovel"];
                $email=$_POST["email"];
                $password=$_POST["password"];
                        $sql="UPDATE `user` 
                        SET `nome`='".$nome."',
                            `hobbies`='".$hobbies."',
                            `telemovel`='".$telemovel."',
                            `email`='".$email."',
                            `password`='".$password."'
                            where 
                            `IDuser`='".$id."'";
                            $query = mysqli_query($con,$sql);

                        if(!$query){
                        echo"check query";
                        }
                        else{
                        header("Location:index.php?User Atualizado com sucesso");
                        }
            }
            else{
                header("Location:index.php");
            }
?>