<?php

require_once( 'database.php' );

class User {

  protected $id;
  protected $email;
  protected $password;
  protected $active;
  protected $validation_key;

  public function __construct( $user = null ) {

    if( $user != null ):
      $this->setId( isset( $user->id ) ? $user->id : null );
      $this->setEmail( $user->email );
      $this->setPassword( $user->password, isset( $user->password_confirm ) ? $user->password_confirm : false );
      $this->setValidationKey(isset( $user->validation_key ) ? $user->validation_key : md5(microtime(TRUE)*100000) );
    endif;
  }

  /***************************
  * -------- SETTERS ---------
  ***************************/

  public function setId( $id ) {
    $this->id = $id;
  }

  public function setEmail( $email ) {

    if ( !filter_var($email, FILTER_VALIDATE_EMAIL)):
      throw new Exception( 'Email incorrect' );
    endif;

    $this->email = $email;

  }

  public function setPassword( $password, $password_confirm = false ) {

    if( $password_confirm && $password != $password_confirm ):
      throw new Exception( 'Vos mots de passes sont différents' );
    endif;

    $this->password = $password;
  }

  public function setValidationKey( $validation_key ) {
    $this->validation_key = $validation_key;
  }

  public function setActive() {
    if($this->active != true):
      $this->active = true;
    endif;
  }

  /***************************
  * -------- GETTERS ---------
  ***************************/

  public function getId() {
    return $this->id;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getPassword() {
    return $this->password;
  }

  public function getValidationKey() {
    return $this->validation_key;
  }

  public function getActive() {
    return $this->active;
  }

  /***********************************
  * -------- CREATE NEW USER ---------
  ************************************/

  public function createUser() {

    // Open database connection
    $db   = init_db();

    // Check if email already exist
    $req  = $db->prepare( "SELECT * FROM user WHERE email = ?" );
    $req->execute( array( $this->getEmail() ) );

    if( $req->rowCount() > 0 ) throw new Exception( "Cet utilisateur existe déjà !" );

    // Insert new user
    $req->closeCursor();

    $req  = $db->prepare( "INSERT INTO user ( email, password, validation_key ) VALUES ( :email, :password , :validation_key )" );
    $req->execute( array(
      'email'     => $this->getEmail(),
      'password'  => password_hash($this->getPassword(), PASSWORD_DEFAULT),
      'validation_key'  => $this->getValidationKey()
    ));

    // Close database connection
    $db = null;

  }

  /**************************************
  * -------- GET USER DATA BY ID --------
  ***************************************/

  public static function getUserById( $id ) {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT * FROM user WHERE id = ?" );
    $req->execute( array( $id ));

    // Close database connection
    $db   = null;

    return $req->fetch();
  }

  /***************************************
  * ------- GET USER DATA BY EMAIL -------
  ****************************************/

  public function getUserByEmail() {

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "SELECT * FROM user WHERE email = ?" );
    $req->execute( array( $this->getEmail() ));

    // Close database connection
    $db   = null;

    return $req->fetch();
  }



/****************************************************
* ------- SET USER ACCOUNT ACTIVE ON DATABASE -------
*****************************************************/

  public static function setUserAccountActive($id){

    // Open database connection
    $db   = init_db();

    $req  = $db->prepare( "UPDATE user SET active = true WHERE id = ?" );
    $req->execute( array( $id ));

    // Close database connection
    $db   = null;

  }


/************************************
  * ------- UPDATE USER DATA  -------
  ***********************************/

  public function updateEmail(){
    // Open database connection
    $db   = init_db();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req  = $db->prepare( "UPDATE user SET email = :email WHERE id = :id" );

    $req->execute( array(
      'email' => $this->getEmail(),
      'id'  => $this->getId()
    ));

    // Close database connection
    $db   = null;

  }

  public function updatePswd(){

    // Open database connection
    $db   = init_db();
    
    $req  = $db->prepare( "UPDATE user SET password = :password WHERE id = :id" );
    $req->execute( array(
      'password'  => password_hash($this->getPassword(), PASSWORD_DEFAULT),
      'id'  => $this->getId()
    ));

    // Close database connection
    $db   = null;

  }

  public function deleteUser(){

    // Open database connection
    $db   = init_db();
    
    $req  = $db->prepare( "DELETE FROM user WHERE id = :id" );
    $req->execute( array(
      'id'  => $this->getId()
    ));

    // Close database connection
    $db   = null;

  }

}  
