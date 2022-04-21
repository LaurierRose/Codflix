<?php

/*************************************
* ----- INIT DATABASE CONNECTION -----
*************************************/

function init_db()
{
    try {

        $host = $_ENV['CODFLIX_DB_HOST'] ?? 'localhost';
        $dbname = $_ENV['CODFLIX_DB_NAME'] ?? 'discoding';
        $charset = $_ENV['CODFLIX_DB_CHARSET'] ?? 'utf8';
        $user = $_ENV['CODFLIX_DB_USER'] ?? 'site';
        $password = $_ENV['CODFLIX_DB_PASSWORD'] ?? 'codFlix2022TP%';
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset",
            $user,
            $password);
        

    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $db;
}

