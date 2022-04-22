<?php ob_start(); ?>

<div class="landscape">
  <div class="bg-black">
    <div class="row no-gutters">
      <div class="col-md-6 full-height bg-white">
        <div class="auth-container custom-form">
          <h2><span>Cod</span>'Flix</h2>
          <h3>Activation</h3>
          <div class="form-group">
            <span class="user-msg m-3">
              <?= isset( $message ) ? $message : null; ?>
            </span>
            <div class="col-md-12 row my-5">
                <div class="col-md-6 my-1">
                  <a href="index.php" class="btn btn-block bg-red">Retour</a>
                </div>
                <div class="col-md-6 my-1">
                  <a href="index.php" class="btn btn-block btn-secondary">Contact</a>
                </div>
            </div>
          </div>    
        </div>
      </div>
      <div class="col-md-6 full-height">
        <div class="auth-container">
          <h1>Bienvenue !</h1>
        </div>
      </div>
    </div>
  </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require( __DIR__ . '/../base.php'); ?>