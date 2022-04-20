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
     
    https://localhost/Codeflix/projet-cod-flix---php-LaurierRose/index.php?id='.urlencode($login).'&key='.urlencode($key).'
    
    ---------------
    Ceci est un mail automatique, Merci de ne pas y répondre.';
     
    var_dump($recipient, $object, $message, $header);
    
    mail($recipient, $object, $message, $header); 

}

function sendContactEmail($message){

    $recipient = 'contact@codflix.com”';
    $object = $message['objet'] ;
    $header = "From: ". $message['email'] ;
    $text = $message['text'];

    var_dump($recipient, $object, $message, $header);

    mail($recipient, $object, $text, $header);
}

 

?>