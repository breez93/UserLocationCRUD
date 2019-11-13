<?php include "config.php";
$erro="";
$sql = "SELECT * FROM user";
$query = mysqli_query($con,$sql);
if($linha=mysqli_fetch_assoc($query)){
    echo"";
}
else{
    header("Location:index.php?erro=introduza um registo de utilizador");
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title>Regist User</title>
</head>
<div class="container">

    <body>
        <a href="index.php" class="button">Home</a>
</div>
<div class="container">
    <?php
if($erro=="1"){
    echo "introduza um registo de user";
}
?>
    <form action="address_insert.php?IDuser=<?php echo $linha["IDuser"]?>" method="POST">
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
            <input type="text" name="concelho" placeholder="introduza concelho" not required>
        </p>
        <p>
            <label for="Rua">Rua : </label>
            <input type="text" name="rua" placeholder="introduza rua" required>
        </p>
        <p>
            <label for="Cp">Codigo Postal : </label>
            <input type="text" name="cp" placeholder="introduza codigo postal" required>
        </p>
        <p>
            <input type="submit" name="inserirmorada" value="Criar Morada">
        </p>
    </form>
</div>
</body>

</html>