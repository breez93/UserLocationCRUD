<?php include "config.php";?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title>Programa de operações CRUD</title>
</head>
<div class="container" id="Titulo">
    <h2>CREATE READ UPDATE DELETE program</h2>
    <hr>
</div>
<div class="container" id="Menu de Opções">
    <h3>Operacionalização</h3>
    <?php
    
    $selectiduser="SELECT * from user";
    $query=mysqli_query($con,$selectiduser);
        if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query)){
            $id=$row["IDuser"];
        }
    }
    
    
    ?>
    <a href="user_insert.form.php" name="registuser" class="button">Registar Utilizador</a>

</div>
<div class="container">

    <body>
        <?php
        $select="SELECT * from user";
        $result = mysqli_query($con,$select);
        ?>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Hobbies </th>
                        <th>Telemovel</th>
                        <th>Email</th>
                        <th>password</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php
            $return=mysqli_query($con,$select);
            if(mysqli_num_rows($return)>0){
             while($row=mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["nome"]."</td>"."
                  <td>".$row["hobbies"]."</td>"."
                  <td>".$row["telemovel"]."</td>
                  <td>".$row["email"]."</td>
                  <td>".$row["password"]."</td>";?>
                <td>
                    <a href="user_update.form.php?edit=<?php echo $row["IDuser"];?>" name="edit" class="button">Editar</a>
                    <a href="user_delete.php?delete=<?php echo $row["IDuser"];?>" name="deleteuser"
                        class="button">Apagar</a>
                   <a href="user_profile.php?perfilid=<?php echo $row["IDuser"];?>" name="perfil"
                        class="button">Perfil</a>
                 </td>
                <?php }
            }
            ?>
            </table>
    </body>
</div>

</html>