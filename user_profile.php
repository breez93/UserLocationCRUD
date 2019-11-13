<?php
include "config.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title>User profile </title>
</head>

<body>
    <!-- <div class="container">
    <h4>Perfil do User : 
         /*
        $selectusername="SELECT * from user";       
        $resultquery = mysqli_query($con,$selectusername);
        if(mysqli_num_rows($resultquery)>0){
        while($linha=mysqli_fetch_assoc($resultquery)){
        $perfil = $linha["nome"];}
        echo $perfil; 
        }
        else{
            echo"check code";
        } */
</h4>
    </div> -->
    <div class="container">
        <?php
    $id=$_GET["perfilid"];    
    ?>
        <a href="index.php" class="button">Back</a>
        <a href="address_insert.form.php?userid=<?php echo $id;?>" name="regist" class="button">Registar Morada</a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Distritos</th>
                    <th>Cidade</th>
                    <th>Concelho</th>
                    <th>Rua</th>
                    <th>Cp</th>
                </tr>
            </thead>
            <?php
                    $sqladdressread ="SELECT * from address";
                    $addressresult = mysqli_query($con,$sqladdressread);                
                    if(mysqli_num_rows($addressresult)>0){
                    while($row=mysqli_fetch_assoc($addressresult)){
        echo "<tr>             
             <td>".$row["distrito"]."</td>
             <td>".$row["cidade"]."</td>
          <td>".$row["concelho"]."</td>
          <td>".$row["rua"]."</td>
          <td>".$row["cp"]."</td>";?>
            <td>
                <a href="address_update.php?edit=<?php echo $id?>" name="addressupdate"
                    class="button">Edit</a>
                <a href="address_delete.php?delete=<?php echo $id;?>" name="addressdelete"
                    class="button">Delete</a>
            </td>
            <?php }
            }
            ?>
        </table>
    </div>
</body>

</html>