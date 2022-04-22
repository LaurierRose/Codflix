<?php ob_start(); ?>
<div class="row">
    <div class="col-md-10 ">
        <!-- search area -->
        <form method="get" class="column">
            <div class= "filters-search row mx-2">
                <!-- search by style of stream -->
                <div class="form-group m-1"> 
                    <label class="btn" for="genre">Genre</label>
                    <select id="genre" name="genre" class= "btn-secondary">
                        <option value="">Tous</option>
                        <?php 
                        foreach( $genres as $genre ): 
                        ?>
                        <option value="<?=$genre['name'];?>"><?=$genre['name'];?></option>
                        <?php 
                        endforeach; 
                        ?>
                </select>
                </div>
                <!-- search by type of stream -->
                <div class="form-group m-1"> 
                    <label class="btn" for="type">Type</label>
                    <select id="type" name="type" class= "btn-secondary">
                        <option value="">Tous</option>
                        <option value="film">Film</option>
                        <option value="serie">Série</option>
                    </select>
                </div>
                <!-- search by year of stream -->
                <div class="form-group m-1">
                    <label class="btn" for="year">Année de sortie</label>
                    <select id="year" name="year" class= "btn-secondary">
                        <option value="">Tous</option>
                        <?php 
                        for($i = 1900; $i <= 2029; $i++): 
                        ?>
                        <option value="<?=$i;?>"><?=$i;?></option>
                        <?php 
                        endfor; 
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group has-btn">     
                <input type="search" id="search" name="title" value="<?= $search; ?>" class="form-control"
                        placeholder="Rechercher un film ou une série">
                <button type="submit" class="btn btn-block bg-red">Valider</button>
            </div>
        </form>
    </div>
</div>

<div class="media-list">
    <?php foreach( $medias as $media ): ?>
        <a class="item episode" href="index.php?media=<?= $media['id']; ?>">
            <div class="video">
                <div>
                    <iframe allowfullscreen="" style="border:none;"
                            src="<?= $media['trailer_url']; ?>" ></iframe>
                </div>
            </div>
            <div class="title"><?= $media['title']; 
            if($media['type']== 'serie'):
                echo ' <span id="mediatype" class="badge bg-red">'. $media['type']. '</span>';
            else:
                echo ' <span id="mediatype" class="badge bg-blue">'. $media['type']. '</span>';
            endif;
               ?>
            </div>
            <!-- I want to display only the year of release -->
            <div class="date"><?= substr($media['release_date'], 0, 4); ?></div>
        </a>
    <?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
