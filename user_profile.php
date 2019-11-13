<?php
include "config.php";
$sql = "SELECT * From user";
$query = mysqli_query($con,$sql);

if($linhas=mysqli_fetch_assoc($query)){
    echo "";
}
$_SESSION["logedin"]=1;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title>User profile </title>
</head>

<body>
    <div class="container">
        <h3>
            Perfil <?php echo $linhas["nome"];?>
        </h3>
    </div>
    <div class="container">
    <a href="index.php" class="button">Home<?php unset($_SESSION["logedin"])?></a>
    <a href="address_regist.php?userid=<?php
                                            $sql="SELECT * from users";
                                            $return=mysqli_query($con,$sql);
                                            if($rows=mysqli_fetch_assoc($return)){
                                                    echo $rows["IDuser"];
                                            }
                                        
                                        ?>
    " name="regist" class="button">Registar Morada</a>
    </div>
    <div class="container">
<table clas="table">
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
        <a href="address_update.php?edit=<?php echo $row["IDuser"];?>" class="button">Edit</a>
        <a href="address_delete.php?delete=<?php echo $row["IDuser"];?>" name="delete" class="button">Delete</a>
    </td>

    <?php }
            }
            ?>
    </table>
    </div>








</body>

</html>