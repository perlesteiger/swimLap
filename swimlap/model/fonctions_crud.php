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

//recuperer le nom du club
function recoverClub() {
    
    $dbconn = connect_bdd();
    
    // Exécution de la requête SQL
    $query = 'SELECT clu_name, clu_id FROM t_e_club_clu';
    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
    
    while ($line = pg_fetch_object($result)) {
        $club = $line;
    }
    
    // Ferme la connexion
    pg_close($dbconn);  
    
    return $club;
}

//modifier le nom du club
function updateClub($new_name, $id) {
    
    $dbconn = connect_bdd();
    
    // Exécution de la requête SQL
    $query = "UPDATE t_e_club_clu SET clu_name = '$new_name' WHERE clu_id = '$id'";
    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
    
    // Ferme la connexion
    pg_close($dbconn);  
    
    return $result;
}

//recuperer les nageurs
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

//ajouter un nageur
function addSwimmer($lastname, $firstname, $id, $sexe, $date) {
    
    $dbconn = connect_bdd();
    
    // Exécution de la requête SQL
    $query = "INSERT INTO t_e_swimmer_swi VALUES ('$id', '$firstname', '$lastname', '$date', '$sexe', '1209')";
    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
    
    // Ferme la connexion
    pg_close($dbconn);  
    
    return $result;
}

//recuperer les records
function recoverRecord() {
    
    $dbconn = connect_bdd();
    
    // Exécution de la requête SQL
    $query = 'SELECT rac_style, rac_dist, rec_swimtime_25, rec_swimtime_50, swi_lastname FROM t_j_record_rec 
                JOIN t_e_swimmer_swi ON rec_swi_id = swi_id
                JOIN t_e_race_rac ON rec_rac_id = rac_id';
    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
    
    $list_record = array();
    
    while ($line = pg_fetch_object($result)) {
        if (empty($line->rec_swimtime_25)) $pool25 = 'pas de temps enregistré';
        else $pool25 = $line->rec_swimtime_25;
        if (empty($line->rec_swimtime_50)) $pool50 = 'pas de temps enregistré';
        else $pool50 = $line->rec_swimtime_50;
        array_push($list_record, $line->swi_lastname." : ".$pool25." (25), ".$pool50." (50) en ".$line->rac_dist." ".$line->rac_style);
    }
    
    // Ferme la connexion
    pg_close($dbconn);  
    
    return $list_record;
}

//ajouter un record
function addRecord($record,$dist,$name,$race,$pool) {
    
    $dbconn = connect_bdd();
    
    //Recuperation id swimmer  
    $query_swi = "SELECT swi_id FROM t_e_swimmer_swi 
                WHERE swi_lastname = '$name'";
    $result_swi = pg_query($query_swi) or die('Échec de la requête : ' . pg_last_error());
    
    $swi = pg_fetch_object($result_swi);
    
    //Recuperation id race
    $query_rac = "SELECT rac_id FROM t_e_race_rac 
                WHERE rac_style = '$race' AND rac_dist = '$dist'";
    $result_rac = pg_query($query_rac) or die('Échec de la requête : ' . pg_last_error());
    
    $rac = pg_fetch_object($result_rac);

    $query = "INSERT INTO t_j_record_rec (rec_swi_id, rec_rac_id, rec_swimtime_$pool) VALUES ($swi->swi_id, $rac->rac_id, $record)";
    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
    
    // Ferme la connexion
    pg_close($dbconn); 
    
    return $result;
    
}

//recuperer les competitions
function recoverCompetition() {
    
    $dbconn = connect_bdd();
    
    // Exécution de la requête SQL
//    $query = '';
//    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
//    
//    $list_competition = array();
//    
//    while ($line = pg_fetch_object($result)) {
//        array_push($list_competition, $line->." ".$line->);
//    }
//    
//    // Ferme la connexion
//    pg_close($dbconn);  
//    
//    return $list_competition;
}

//ajouter une competition
function addCompetition() {
    
    $dbconn = connect_bdd();
    
//    // Exécution de la requête SQL
//    $query = "";
//    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
//    
//    // Ferme la connexion
//    pg_close($dbconn);  
//    
//    return $result;
}
?>
