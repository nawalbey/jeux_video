<?php


include_once "../inc/nav_bar.php"; ?>

<div class="class1">


    <form class="form1" action="../model/connexion_db.php" method="post">
        <div class="titre1">
            <h1>connexion</h1>
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="button1">
            <button type="submit" id="bouton" class="btn mt-5 mb-5" name="connexion" value="submit">connexion</button>
        </div>
    </form>
</div>
<?php include_once "../inc/footer.php"; ?></div>

