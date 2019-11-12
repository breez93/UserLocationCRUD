<?php include "config.php";?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://taniarascia.github.io/primitive/css/main.css" />
    <title>Insert User</title>
</head>
<body>
    <a href="index.php" class="button">Home</a>
    <a href="user_profile.php" class="button">Profile</a>
</body>
</html>
<div class="container">
    <form action="user_insert.php" method="POST">
        <p>
            <label for="nome">Nome : </label>
            <input type="text" name="name" placeholder="introduza nome" required id="name">
        </p>
        <p>
            <label for="idade">idade : </label>
            <input type="idade" name="idade" placeholder="introduza idade" required id="age">
        </p>
        <p>
            <label for="telemovel">telemovel : </label>
            <input type="telemovel" name="telemovel" placeholder="introduza telemovel" required class="name">
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
        <input type="submit" name="insert" value="Create" class="button">
        </p>
    </form>
</div>