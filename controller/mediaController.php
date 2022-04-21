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
  var_dump($media);
  if($media['type']=='film'):
    require('view/filmView.php');
  else:
    require('view/serieView.php');
  endif;
} 