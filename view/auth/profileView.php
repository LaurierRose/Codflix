<?php ob_start(); ?>
<div class="auth-container">
    <h2><span>Mon </span>profil</h2>
    <h3>Mettre à jour mes informations</h3>
    <form method="post" action="index.php?action=profile&type=email" class="custom-form">
        <span class="user-msg">
        <?= isset( $message ) ? $message : null; ?>
        </span>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" 
            id="email" class="form-control" required
            value="<?= isset( $userData['email'] ) ? $userData['email'] : null; ?>" />
        </div>
        <div class="col-md-8">
            <input type="submit" name="Valider" 
            value="Modifier l'email" class="btn btn-block bg-blue" />
        </div>
    </form> 

    <form method="post" action="index.php?action=profile&type=pswd" class="custom-form py-4">
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

        <div class="col-md-8">
            <input type="submit" name="Valider" 
            value="Modifier le mot de passe" class="btn btn-block bg-blue" />
        </div>
    </form>

    <form method="post" action="index.php?action=profile&type=suppr" class="custom-form py-4">
        <div class="form-group">
            <div class= "col-md-8">
                <input type="submit" name="Valider" 
                value="Supprimer le compte" class="btn btn-block bg-red" />
            </div>
        </div>
    </form>
    


</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/dashboard.php'); ?>
