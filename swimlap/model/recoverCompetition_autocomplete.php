<?php
include 'fonctions_crud.php';

connect_bdd();

$term = $_GET['q'];

$sql = "SELECT mee_name, mee_city FROM t_e_meeting_mee WHERE mee_name LIKE '%".$term."%' OR mee_city LIKE '%".$term."%'"; 
$result = pg_query($sql) or die(pg_last_error());

while($donnee = pg_fetch_object($result)) // on effectue une boucle pour obtenir les données
{
    $tmp=  utf8_encode($donnee->mee_name."|".$donnee->mee_city.'');
    echo "$tmp\n";
}

?>
