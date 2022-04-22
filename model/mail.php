<?php

/*************************************
* ----- EMAIL SENDING FUNCTIONS -----
*************************************/

function sendValidationEmail($user){
    $recipient = $user['email'];
    $login = $user['id'];
    $object = "Activer votre compte" ;
    $header = "From: inscription@codflix.com" ;
    $key = $user['validation_key'];
     
    $message = 'Bienvenue sur Cod\'Flix,
     
    Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
    ou copier/coller dans votre navigateur Internet.
     
    http://localhost/Codeflix/projet-cod-flix---php-LaurierRose/index.php?id='.urlencode($login).'&key='.urlencode($key).'
    
    ---------------
    Ceci est un mail automatique, Merci de ne pas y répondre.';
    
    /****************************************************************
    * ----- Uncomment Var_dump below to test validation address -----
    ****************************************************************/
    //var_dump($message);
    
    mail($recipient, $object, $message, $header); 

}

function sendContactEmail($message){

    $recipient = 'contact@codflix.com”';
    $object = $message->object ;
    $header = "Email : ". $message->email ;
    $text = $message->text;

    //var_dump("Contact email: ".$recipient, $object, $message, $header);

    mail($recipient, $object, $text, $header);

}

?>