<?php

require_once( 'database.php' );

class Media {

  protected $id;
  protected $genre_id;
  protected $title;
  protected $type;
  protected $status;
  protected $release_date;
  protected $summary;
  protected $trailer_url;

  public function __construct( $media ) {

    $this->setId( isset( $media->id ) ? $media->id : null );
    $this->setGenreId( $media->genre_id );
    $this->setTitle( $media->title );
  }

  /***************************
  * -------- SETTERS ---------
  ***************************/

  public function setId( $id ) {
    $this->id = $id;
  }

  public function setGenreId( $genre_id ) {
    $this->genre_id = $genre_id;
  }

  public function setTitle( $title ) {
    $this->title = $title;
  }

  public function setType( $type ) {
    $this->type = $type;
  }

  public function setStatus( $status ) {
    $this->status = $status;
  }

  public function setReleaseDate( $release_date ) {
    $this->release_date = $release_date;
  }

  /***************************
  * -------- GETTERS ---------
  ***************************/

  public function getId() {
    return $this->id;
  }

  public function getGenreId() {
    return $this->genre_id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getType() {
    return $this->type;
  }

  public function getStatus() {
    return $this->status;
  }

  public function getReleaseDate() {
    return $this->release_date;
  }

  public function getSummary() {
    return $this->summary;
  }

  public function getTrailerUrl() {
    return $this->trailer_url;
  }

  /***************************
  * -------- GET LIST --------
  ***************************/

  public static function filterMedias( $title , $get) {

    // Open database connection
    $db   = init_db();

    //Add filters to Query
    $params = '';
    if(isset($get['genre'])&& $get['genre']>0){
      $params .= ' AND genre_id = '.$get['genre'];
    }
    if(isset($get['type'])&& $get['type']>0){
      $params .= ' AND type ="'.$get['type'] .'"';
    }
    if(isset($get['minyear'])&& $get['minyear']>0){
      $params .= ' AND release_date >= "'.$get['minyear']. '-01-01"';
    }
    if(isset($get['maxyear'])&& $get['maxyear']>0){
      $params .= ' AND release_date <="'.$get['maxyear']. '-01-01"';
    }

    $title = 'WHERE title LIKE "%'.$title.'%"';
  
    $query = "SELECT * FROM media " .$title. " " .$params. " ORDER BY release_date DESC";
    var_dump($query);
    $req  = $db->prepare( $query );
    $req->execute();

    // Close database connection
    $db   = null;

    return $req->fetchAll();

  }

  /******************************
  * ----- GET MEDIA FROM ID -----
  ******************************/

  public static function getMedia( $id ) {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT * FROM media WHERE id = ?" );
    $req->execute( array( $id ));

    // Close database connection
    $db   = null;

    return $req->fetchAll();

  }

  /*************************************************
  * ----- GET LIST SEASON/EPISODES FROM MEDIA  -----
  *************************************************/
  
  public static function getEpisodes( $id ) {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT * FROM episodes e, saisons s 
                            WHERE e.idsaison = s.idsaison 
                            AND s.idmedia = ?" );
    $req->execute( array( $id ));

    // Close database connection
    $db   = null;

    return $req->fetchAll();

  }

  
  public static function getSeasonId( $id ) {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT DISTINCT idsaison FROM saisons 
                            WHERE idmedia = ?" );
    $req->execute( array( $id ));

    // Close database connection
    $db   = null;

    return $req->fetchAll();

  }

  /*******************************************
  * ----- GET THE LIST OF MEDIAS GENRES  -----
  *******************************************/

  public static function getGenre( ) {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT * FROM genre" );
    $req->execute();

    // Close database connection
    $db   = null;

    return $req->fetchAll();

  }


}
