<?php ob_start(); ?>

<div class="seriecard" >
    <iframe allowfullscreen="" style="border:none;" class="card-img" 
        src="<?= $media['trailer_url']; ?>" ></iframe>
    <div class="card-body">
        <h5 class="card-title"><?= $media['title']; ?></h5>
        <p class="card-text"><?= $media['summary']; ?></p>
        <a href="#" class="btn btn-primary">Regarder</a>
    </div>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>