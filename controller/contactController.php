<?php

require_once( 'model/mail.php' );

/*********************************
* ----- LOAD CONTACT PAGE -----
*********************************/

function contactPage() {
    
    if(isset($_SESSION['user_id'])):
        require('view/contactView.php');
        require('view/dashboard.php');
    else:
        require('view/contactView.php');
        require( 'view/base.php');
    endif;

}

/*****************************
* ----- CONTACT FUNCTION -----
*****************************/

function sendmessage($post){

        $message         = new stdClass();
        $message->object = $post['object'];
        $message->text   = $post['text'];
        $message->email  = $post['email'];

        //var_dump($message);

        $user_msg = "Votre message a bien été envoyé !";
        sendContactEmail($message);


    contactPage();
}

?>

