<?php 
include "config.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title>Registar Mora</title>
</head>
    <body>
    <div class="container">
        <!-- /*<a href="user_profile.php?PerfilID=class="button">Back</a>*/ queria usar um back button para ao perfil e questao -->
        <a href="index.php" class="button">Voltar</a>
    </div>
    <div class="container">
        <?php 
            $id = $_GET["userid"];
        ?>
    <form action="address_insert.php?IDuser=<?php echo $id;?>" method="POST" class="form">
        <p>
            <label for="Distrito">Distrito : </label>
            <input type="text" name="distrito" placeholder="introduza distrito" required>
        </p>
        <p>
            <label for="Cidade">Cidade : </label>
            <input type="text" name="cidade" placeholder="introduza cidade" not required>
        </p>
        <p>
            <label for="Concelho">Concelho : </label>
            <input type="text" name="concelho" placeholder="introduza concelho" notrequired>
        </p>
        <p>
            <label for="Rua">Rua : </label>
            <input type="text" name="rua" placeholder="introduza rua" required>
        </p>
        <p>
            <label for="Cp">Codigo Postal: </label>
            <input type="varchar" name="cp" placeholder="introduza codigo postal" required>
        </p>
        <p>
            <input type="submit" name="inserirmorada" value="Criar Morada">
        </p>
    </form>
</body>
</div>
</html>