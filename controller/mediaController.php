<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function mediaPage() {

  $search = isset( $_GET['title'] ) ? $_GET['title'] : null;
  $medias = Media::filterMedias( $search );

  if(isset($_GET['media'])):
    mediaDetail($_GET);
  else:
    require('view/mediaListView.php');
  endif;

}

/*********************************
* ----- FUNCTIONS FOR MEDIAS -----
*********************************/

function mediaDetail($get){
  $media = Media::getMedia($get['media'])[0];
  //var_dump($media);
  

  //Display the right type of media view if it is film or serie
  if($media['type']=='film'):
    require('view/filmView.php');
  else:
    //Get list of seasons and episodes to display them in the tabs of the view
    $episodes = Media::getEpisodes($media['id']);
    $seasonsid = Media::getSeasonId($media['id']);

foreach( $episodes as $episode ): 
    //var_dump($episode['idsaison']);
endforeach;

    require('view/serieView.php');
  endif;
} 