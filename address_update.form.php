<html>
<?php
        include "config.php";
?>
        <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title>Address Update Form</title>
</head>
<div class="container">
    <body>
       <?php
        $distrito="";
        $cidade="";
        $concelho="";
        $rua="";
        $cp="";
        if("addressupdate"==true){
        $id = $_GET["edit"];
        }
        $query="SELECT * FROM  
        `address` where 
        IDaddress = '".$id."'";
        $queryresult = mysqli_query($con,$query);
        while($linha=mysqli_fetch_assoc($queryresult)){
            $distrito=$linha['distrito'];
            $cidade=$linha['cidade'];
            $concelho=$linha['concelho'];
            $rua=$linha['rua'];
            $cp=$linha["cp"];
        }
        ?>
        <div class="container">
            <h2>Editar Address</h2>
            <a href="index.php" class="button">Home</a>
        </div>
        <form method="POST" action="address_update.php?ID=<?php echo $id?>" class="form">
            <p>
                <label for="distrito">Distrito :</label>
                <input type="text" name="distrito" value="<?php echo $distrito?>" placeholder="introduza distrito" required>
            </p>
            <p>
                <label for="cidade">Cidade : </label>
                <input type="text" name="cidade" value="<?php echo $cidade?>">
            </p>
            <p>
                <label for="concelho">Concelho : </label>
                <input type="concelho" name="concelho" value="<?php echo $concelho?>"
                    placeholder="introduza concelho" not required class="name">
            </p>
            <p>
                <label for="rua">Rua : </label>
                <input type="rua" name="rua" value="<?php echo $rua?>" placeholder="introduza a sua rua" required
                    id="email">
            </p>
            <p>
                <label for="cp">codigo postal : </label>
                <input type="char" name="cp" value="<?php echo $cp?>" placeholder="introduza cp"
                    required id="password">
            </p>
            <input type="submit" value="Update" name="update" class="button">
        </form>
    </body>
</div>

</html>