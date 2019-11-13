<?php include "config.php";?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title>Registar Utilizador</title>
</head>
<div class="container">
    <body>
        <a href="index.php" class="button">Home</a>
</div>
<div class="container">
    <form action="user_insert.php" method="POST">
        <p>
            <label for="nome">Nome : </label>
            <input type="text" name="name" placeholder="introduza nome" required id="name">
        </p>
        <p>
            <label for="hobbies">hobbies :</label>
            <textarea type="text" name="hobbies"></textarea>
        </p>
        <p>
            <label for="telemovel">telemovel : </label>
            <input type="number" name="telemovel" placeholder="introduza telemovel" required class="name">
        </p>
        <p>
            <label for="email">email : </label>
            <input type="email" name="email" placeholder="introduza email" required id="email">
        </p>
        <p>
            <label for="password">password : </label>
            <input type="password" name="password" placeholder="introduza password" required id="password">
        </p>

        <p>
            <input type="submit" name="inseriruser" value="Create" class="button">
        </p>
    </form>
</div>
</body>

</html>