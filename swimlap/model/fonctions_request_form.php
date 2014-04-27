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

function recoverSwimmer() {
    
    $dbconn = connect_bdd();
    
    // Exécution de la requête SQL
    $query = 'SELECT swi_firstname, swi_lastname FROM t_e_swimmer_swi';
    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
    
    $list_swimmer = array();
    
    while ($line = pg_fetch_object($result)) {
        array_push($list_swimmer, $line->swi_lastname." ".$line->swi_firstname);
    }
    
    // Ferme la connexion
    pg_close($dbconn);  
    
    return $list_swimmer;
}
?>