<?php
// Connexion, sélection de la base de données
function connect_bdd() {
    $host = 'localhost';
    $dbname = 'postgres';
    $user = 'postgres';
    $password = 'postgres';

    $dbconn = pg_connect("host=".$host." 
                          dbname=".$dbname." 
                          user=".$user." 
                          password=".$password)
        or die('Connexion impossible : ' . pg_last_error());
    
    return $dbconn;
}

?>
