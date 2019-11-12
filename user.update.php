<?php

include "config.php";

if(isset($_GET["edit"])){
    $id = $_GET["edit"]; 
}
?>
<html>
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
      <input type="submit" value="update" name="update" class="button">
    </form>
</div>
</html>