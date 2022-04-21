<?php ob_start(); ?>
<div class="auth-container">
    <h2><span>Mon </span>profil</h2>
    <h3>Mettre à jour mes informations</h3>
    <form method="post" action="index.php?action=profile" class="custom-form">
        <div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" 
                id="email" class="form-control" required
                value="<?= isset( $userData['email'] ) ? $userData['email'] : null; ?>" />
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" 
                value="" 
                id="password" class="form-control" required />
            </div>

            <div class="form-group">
                <label for="newpassword">Nouveau mot de passe</label>
                <input type="password" name="newpassword" 
                value="" id="newpassword" class="form-control" require/>
            </div>

            <div class="form-group">
                <label for="newpassword_confirm">Confirmer le nouveau mot de passe</label>
                <input type="password" name="newpassword_confirm" 
                value="" id="newpassword_confirm" class="form-control" require/>
            </div>

            <div class="form-group">
                <div class= "row">
                    <div class="col-md-4 p-1">
                        <input type="submit" name="Valider" 
                        value="Enregistrer" class="btn btn-block bg-blue" />
                    </div>
                    <div class="col-md-4 p-1">
                        <a href="index.php" class="btn btn-block btn-secondary">Abandonner</a>
                    </div>
                    <div class="col-md-4 p-1">
                        <a href="#" class="btn btn-block bg-red">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
        <span class="user-msg">
        <?= isset( $message ) ? $message : null; ?>
        </span>
    </form>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/dashboard.php'); ?>
