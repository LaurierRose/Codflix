<?php ob_start(); ?>

<div class="seriecard" >
  <iframe allowfullscreen="" style="border:none;" class="card-img" 
      src="<?= $media['trailer_url']; ?>" ></iframe>
  <div class="card-body">
      <h5 class="card-title"><?= $media['title']; ?></h5>
      <p class="card-text"><?= $media['summary']; ?></p>
  </div>
  <div class="card">
    <div class="card-header">

    <!-- Displaying creating tabbar dépending on the number of seasons -->

      <ul class="nav nav-tabs card-header-tabs">

      <?php 
      $count = 0;
      foreach( $seasonsid as $seasonid ): 
        $count+=1;
        if ($count == 1):
          $active = 'active';
        else:
          $active = '';
        endif;?>
        <li class="nav-item">
          <a class="nav-link <?= $active; ?>" aria-current="true" href="#saison<?= $count; ?>" data-toggle="tab">Saison <?= $count; ?></a>
        </li>
        <?php endforeach; ?>

      </ul>
    </div>

    <!-- Displaying episodes grouped by seasons -->

    <div class="tab-content content p-4">
    <?php 
    $count = 0;
    foreach( $seasonsid as $seasonid ): 
      $count+=1;
      if ($count == 1):
        $active = 'active';
      else:
        $active = '';
      endif;?>
      <div class="<?= $active; ?> card-body tab-pane in" id ="saison<?= $count; ?>">
        <div class="media-list">

          <?php foreach( $episodes as $episode ): 
            if($episode['idsaison'] == $seasonid['idsaison']):?>

            <div class="card video m-1" style="width: 15rem;">
              <iframe allowfullscreen="" style="border:none;"
                          src="<?= $episode['urlep']; ?>" ></iframe>
              <div class="card-body">
                <h5 class="card-title"><?= $episode['titreep']; ?></h5>
                <a href="#" class="btn btn-secondary">Regarder</a> <br>
                <small class="date">Durée : <?= $episode['duration']; ?> mn</small>
                <p class="card-text"><?= $episode['summaryep']; ?></p>
              </div>
          </div>

        <?php 
            endif;
        endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
        
  </div>


<?php $content = ob_get_clean(); ?>



<?php require('dashboard.php'); ?>