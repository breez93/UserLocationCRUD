<?php include "config.php";?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title></title>
</head>
<div class="container">
    <h2>Programa de inserção de utilizadores e Localização</h2>
</div>
<div class="container">
    <h3>Menu de opções</h3>
    <a href="registar.php" class="button">Criar Utilizador</a>
</div>
<div class="container">

    <body>
        <?php
    
        $select="SELECT * from user";
        $result = mysqli_query($con,$select);
        ?>
        <div class="container">
            <table class="table">
                <td>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Idade </th>
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
                  <td>".$row["idade"]."</td>"."
                  <td>".$row["telemovel"]."</td>
                  <td>".$row["email"]."</td>
                  <td>".$row["password"]."</td>";
?>

                <td>
                    <a href="user_update.php?edit=<?php echo $row["IDuser"];?>" name="edit" class="button">Edit</a>
                    <a href="user_delete.php?delete=<?php echo $row["IDuser"];?>" name="delete" class="button">Delete</a>
                </td>
                <?php
     }
    }
?>
    </body>
</div>

</html>