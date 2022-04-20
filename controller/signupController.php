<?php

require_once( 'model/user.php' );

/****************************
* ----- LOAD SIGNUP PAGE -----
****************************/

function signupPage() {

  $user     = new stdClass();
  $user->id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( !$user->id ):
    require('view/auth/signupView.php');
  else:
    require('view/homeView.php');
  endif;

}

/***************************
* ----- SIGNUP FUNCTION -----
***************************/

function  signup($post) {
  $user_data              = new stdClass();
  $user_data->email       = $post['email'];
  $user_data->password    = $post['password'];
  $user_data->password_confirm  = $post['password_confirm'];

  try{
    $new_user = new User( $user_data );
    $new_user->createUser();

    // Set session for the new user
    $user = $new_user->getUserByEmail();
    $_SESSION['user_id'] = $user['id'];
    
    header( 'location: index.php ');

  } catch (Exception $e){
    //Use User class Exceptions to check if passwords are identicals and email correct
    $error_msg = $e->getMessage();
  }
  
  require('view/auth/signupView.php');

}