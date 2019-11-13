<?php

include "config.php";
$id=$_GET["delete"];
if("deleteuser"==true){
    $delete="DELETE from user where IDuser='$id'";
}

if($result=mysqli_query($con,$delete)){

    header("location:index.php?Entrada de utilizador apagada com sucesso");
}
else{
    header("location:index.php?Porfavor elimine o registo de morada no perfil de utilizador respetivo");
}


?>