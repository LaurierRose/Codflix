<?php

//session_start();

require_once( 'model/user.php' );

/*********************************
* ----- LOAD ACTIVATION PAGE -----
*********************************/

function activationPage($get) {

  //Get variables in the link given in the email
  $id  = $get['id'];
  $key = $get['key'];


  //Get account information from id
  $user = User::getUserById( $id );

  if($user['active'] == '1'): // If the account is already active
    $message = "Votre compte est déjà actif !";

  else:

    if($key == $user['validation_key'])    
      {    
        $message = "Votre compte a bien été activé !"; 

        // Activation of user account
        User::setUserAccountActive($id);

        // Set session
        $_SESSION['user_id'] = $user['id'];
      }
    else // If the keys don't match
      {
      $message = "Erreur ! Votre compte ne peut être activé...";
      }
    endif;

    require('view/auth/activationView.php');

}


?>

