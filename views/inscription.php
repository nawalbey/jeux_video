<?php include_once "../inc/header.php" ?>

<div class="container">
    <h1>inscription</h1>
    <form action="../../jeux_video/model/db_jeuxvideo.php" method="post">
        <div>
            <div class="form-group">
                <label>nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group">
                <label>prenom :</label>
                <input type="text" class="form-control" name="prenom">
            </div>

            <div class="form-group">
                <label>email :</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label>adresse :</label>
                <input type="text" class="form-control" name="adresse">
            </div>
            <div class="form-group">
                <label>mot de passe :</label>
                <input type="password" class="form-control" name="mot_de_passe">
            </div>
            <div class="form-group">
                <label>date de naissance:</label>
                <input type="date" class="form-control" name="date_de_naissance">
            </div>
        </div>


        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="inscription" value="submit">Inscription</button>
    </form>
</div>

<?php include_once "../inc/footer.php" ?>

