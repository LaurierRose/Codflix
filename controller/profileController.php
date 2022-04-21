<?php

require_once( 'model/user.php' );

/******************************
* ----- LOAD PROFILE PAGE -----
******************************/

function profilePage() {

    $user = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;
    if( $user ):
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
    //var_dump($userData);
    if(isset($post)):
        $data           = new stdClass();
        $data->email    = $post['email'];
        $data->password = $post['password'];

        // Create a new user object which will receive the modifications
        $user = new User($data);

        // Change password only if new password is input filled
        if(isset($post['newpassword']) && password_verify($post['password'], $userData['password']) ):
            try{
                $user->setPassword($post['newpassword'], $post['newpassword_confirm']);
                //$user->updatePswd();
                //var_dump($user);
                $message = "Vous avez changé votre mot de passe avec succès.";
            } catch (Exception $e) {
                $message = $e->getMessage();
            }
        else:
            $message = "La modification de mot de passe a échoué.";
        endif;
        
        // Change email only if it is different from the one in database
        if($post['email'] != $userData['email'] && password_verify($post['password'], $userData['password'])):
            try{
                $user->setEmail($post['email']);
                $user->updateEmail();
                //var_dump($user->getEmail());
                $message = "Vous avez changé votre email avec succès.";
            } catch (Exception $e) {
                $message = $e->getMessage();
            }
        else:
            $message = "La modification de votre email a échoué.";
        endif;


    endif;

    require('view/auth/profileView.php');
    }


?>