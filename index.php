<?php include "config.php";?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title></title>
</head>
<div class="container" id="Titulo">

    <h2>CREATE READ UPDATE DELETE program</h2>

</div>
<div class="container" id="Menu de Opções">

    <h3>Menu de opções</h3>
    <a href="user_regist.php" class="button">Registar Utilizador</a>
    <a href="address_regist.php?IDuser=<?php echo $row["IDuser"];?>" class="button">Registar Morada</a>
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
                        <th>Name</th>
                        <th>Hobbies </th>
                        <th>Telemovel</th>
                        <th>Email</th>
                        <th>password</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>
                  <td>".$row["nome"]."</td>"."
                  <td>".$row["hobbies"]."</td>"."
                  <td>".$row["telemovel"]."</td>
                  <td>".$row["email"]."</td>
                  <td>".$row["password"]."</td>";?>
                <td>
                    <a href="user_update.php?edit=<?php echo $row["IDuser"];?>" name="edit" class="button">Edit</a>
                    <a href="user_delete.php?delete=<?php echo $row["IDuser"];?>" name="delete"
                        class="button">Delete</a>
                </td>
                <?php }
            }
            ?>
            </table>
            <table>
                <?php
            echo "
                <thead>
                <tr>
                <th>Distrito</th>
                <th>Cidade</th>
                <th>Concelho</th>
                <th>Rua</th>
                <th>Cp</th>
                </tr>
                </thead>";
                // address_select
                $sqlRelation ="SELECT * from address";
                $resultado = mysqli_query($con,$sqlRelation);
                if(mysqli_num_rows($resultado)>0){
                while($row=mysqli_fetch_array($resultado)){
                echo "<tr>
                      <td>".$row["distrito"]."</td>
                      <td>".$row["cidade"]."</td>
                      <td>".$row["concelho"]."</td>
                      <td>".$row["rua"]."</td>
                      <td>".$row["cp"]."</td>";?>


                <td>
                    <a href="address_update.php?edit=<?php echo $row["IDuser"];?>" name="edit" class="button">Edit</a>
                    <a href="address_delete.php?delete=<?php echo $row["IDuser"];?>" name="delete"
                        class="button">Delete</a>
                </td><?php
            }
        }
            ?>
            </table>


    </body>
</div>

</html>