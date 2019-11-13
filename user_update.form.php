<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title>User Update</title>
</head>
<div class="container">
    <body>
        <?php
        include "config.php";
        $nome="";
        $hobbies="";
        $telemovel="";
        $email="";
        $password="";
        $id = $_GET["edit"];
        $query="SELECT * from user where IDuser = '".$id."'";
        $queryresult = mysqli_query($con,$query);
        while($linha=mysqli_fetch_assoc($queryresult)){
            $id=$linha['IDuser'];
            $nome=$linha['nome'];
            $hobbies=$linha['hobbies'];
            $telemovel=$linha['telemovel'];
            $email=$linha['email'];
            $password=$linha["password"];
        }
        ?>
        <div class="container">
            <h2>Edit User</h2>
        <a href="index.php" class="button">Home</a>    
        </div>
        <form method="POST" action="user_update.php?ID=<?php echo $id?>" class="form">
            <p>
                <label for="nome">Nome : </label>
                <input type="text" name="name" value="<?php echo $nome?>" placeholder="introduza nome" required>
            </p>
            <p>
                <label for="hobbies">Hobbies : </label>
                <input type="text" name="hobbies" value="<?php echo $hobbies?>">
            </p>
            <p>
                <label for="telemovel">Telemovel : </label>
                <input type="telemovel" name="telemovel" value="<?php echo $telemovel?>"
                    placeholder="introduza telemovel" required class="name">
            </p>
            <p>
                <label for="email">Email : </label>
                <input type="email" name="email" value="<?php echo $email?>" placeholder="introduza email" required
                    id="email">
            </p>
            <p>
                <label for="password">Password : </label>
                <input type="password" name="password" value="<?php echo $password?>" placeholder="introduza password"
                    required id="password">
            </p>
            <input type="submit" value="Update" name="update" class="button">
        </form>
    </body>
</div>

</html>