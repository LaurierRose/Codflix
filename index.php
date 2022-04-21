<?php

date_default_timezone_set('Europe/Paris');

require_once( 'controller/homeController.php' );
require_once( 'controller/loginController.php' );
require_once( 'controller/signupController.php' );
require_once( 'controller/mediaController.php' );
require_once( 'controller/activationController.php' );
require_once( 'controller/contactController.php' );
require_once( 'controller/profileController.php' );

/**************************
* ----- HANDLE ACTION -----
***************************/

if ( isset( $_GET['action'] ) ):

  switch( $_GET['action']):

    case 'login':

      if ( !empty( $_POST ) ) login( $_POST );
      else loginPage();

    break;

    case 'signup':
      if ( !empty( $_POST ) ) signup( $_POST );
      else signupPage();

    break;

    case 'logout':

      logout();

    break;

    case 'sendmessage':
      if ( !empty( $_POST ) ) sendmessage( $_POST );
      else contactPage();

    break;

    case 'profile':
      if ( !empty( $_POST ) ) profile( $_POST );
      else profilePage();

    break;

  endswitch;

//Validation email account page redirection
elseif( isset($_GET['key'])):
  activationPage($_GET);

else:

  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( $user_id ):
    mediaPage();
  else:
    homePage();
  endif;

endif;
