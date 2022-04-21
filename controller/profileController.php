<?php

require_once( 'model/user.php' );
require_once( 'controller/loginController.php' );

/******************************
* ----- LOAD PROFILE PAGE -----
******************************/

function profilePage() {

    $user = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;
    if( $user ):
        $userData = User::getUserByID($_SESSION['user_id']);
        require('view/auth/profileView.php');
      else:
        require('view/homeView.php');
      endif;

}

/******************************
* ----- PROFILE FUNCTIONS -----
******************************/

function profile($post){

    
    // Get User data from database to compare with the new entries
    $userData = User::getUserByID($_SESSION['user_id']);

    $data           = new stdClass();
    $data->email    = $userData['email'];
    $data->password = $userData['password'];
    

    // Create a new user object which will receive the modifications
    $user = new User($data);
    $user->setId($_SESSION['user_id']);


    // Change password only if new password is different from the old one
    //and if the password is correct
    switch( $_GET['type']):
        case 'pswd':
            if(password_verify($post['password'], $userData['password'])):
                try{
                    $user->setPassword($post['newpassword'], $post['newpassword_confirm']);
                    $user->updatePswd();
                    $message = "Vous avez changé votre mot de passe avec succès.";
                } catch (Exception $e) {
                    $message = $e->getMessage();
                }
            else:
                $message = "Votre mot de passe n'est pas bon.";
            endif;
        break;
    
    // Change email only if it is different from the one in database
        case 'email':
            if($post['email'] != $userData['email']):
                try{
                    $user->setEmail($post['email']);
                    $user->updateEmail();
                    $message = "Vous avez changé votre email avec succès.";
                } catch (Exception $e) {
                    $message = $e->getMessage();
                }
            else:
                $message = "Le nouvel email est identique au premier.";
            endif;
        break;

        case 'suppr':
            //Delete user from database
            $user->deleteUser();
            //Destroy SESSION and redirects user to index.php
            logout();

    endswitch;


    require('view/auth/profileView.php');
    }


?>