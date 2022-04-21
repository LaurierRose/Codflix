<?php ob_start(); ?>

<div class="row no-gutters">
    <div class="col-md-12 full-height bg-white">
        <div class="auth-container">
            <h2><span>Cod</span>'Flix</h2>
            <h3>Nous contacter</h3>
            <form method="post" action="index.php?action=sendmessage" class="custom-form">
                <div class="form-group">
                    <label for="name">Sujet</label>
                    <input type="text" name="object" value="" id="object" class="form-control" required maxlength=50/>
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" name="email" 
                    value="" id="email" class="form-control" 
                    required 
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                </div>
                <div class="form-group">
                    <label for="text">Message</label>
                    <textarea name="text" value="" id="text" class="form-control" required maxlength=300></textarea>
                </div>
                <div class="form-group">
                    <div class= "row">
                        <div class="col-md-6">
                            <input type="submit" name="Valider" class="btn btn-block bg-red" />
                        </div>
                        <div class="col-md-6">
                            <a href="index.php" class="btn btn-block btn-secondary">Retour</a>
                        </div>
                    </div>
                </div>
                <span class="user-msg">
                <?= isset( $user_msg ) ? $user_msg : null; ?>
                </span>
            </form>

        </div>
    </div>
</div>
            
<?php $content = ob_get_clean(); ?>



