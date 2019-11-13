<?php
        include "config.php";
        if(isset($_POST["update"])){
                $id=$_GET["ID"];
                $distrito=$_POST["distrito"];
                $cidade=$_POST["cidade"];
                $concelho=$_POST["concelho"];
                $rua=$_POST["rua"];
                $cp=$_POST["cp"];
                        $sql="UPDATE `address` 
                        SET `distrito`='".$distrito."',
                            `cidade`='".$cidade."',
                            `concelho`='".$concelho."',
                            `rua`='".$rua."',
                            `cp`='".$cp."'
                            where 
                            `IDaddress`='".$id."'";
                            $query = mysqli_query($con,$sql);

                        if(!$query){
                        echo"check query";
                        }
                        else{
                        header("Location:index.php?Atualizado com sucesso");
                        }
            }
            else{
                header("Location:index.php?Atualizado com sucesso");
            }
?>