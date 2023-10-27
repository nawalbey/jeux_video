<?php

session_start();
include_once "../inc/header.php"; ?>


<div class="container">
    <h1>connexion</h1>
    <form action="../model/connexion_db.php" method="post">

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>


        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="connexion" value="submit">connexion</button>
    </form>
</div>
<?php include_once "../inc/footer.php"; ?>

