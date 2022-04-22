<?php ob_start(); ?>

<div class="filmcard" >
    <iframe allowfullscreen="" style="border:none;" class="card-img" 
        src="<?= $media['trailer_url']; ?>" ></iframe>
    <div class="card-body">
        <h5 class="card-title"><?= $media['title']; ?></h5>
        <p class="card-text"><?= $media['summary']; ?></p>
        <a href="#" class="btn btn-secondary">Regarder</a>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>