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
    $query = 'SELECT rac_style, rec_swimtime_25, rec_swimtime_50, swi_lastname FROM t_j_record_rec 
                JOIN t_e_swimmer_swi ON rec_swi_id = swi_id
                JOIN t_e_race_rac ON rec_rac_id = rac_id';
    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
    
    $list_record = array();
    
    while ($line = pg_fetch_object($result)) {
        array_push($list_record, $line->swi_lastname." ".$line->rec_swimtime_25." (25) ".$line->rec_swimtime_50." (50) ".$line->rac_style);
    }
    
    // Ferme la connexion
    pg_close($dbconn);  
    
    return $list_record;
}

//ajouter un record
function addRecord() {
    
    $dbconn = connect_bdd();
    
    // Exécution de la requête SQL
    //faire un select puis un insert
//    $query = "";
//    $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
//    
//    // Ferme la connexion
//    pg_close($dbconn);  
//    
//    return $result;
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
