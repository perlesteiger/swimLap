<?php
include 'fonctions_crud.php';

connect_bdd();

$term = $_GET['q'];

$sql = "SELECT swi_firstname, swi_lastname, swi_id FROM t_e_swimmer_swi WHERE swi_lastname LIKE '%".$term."%' OR swi_firstname LIKE '%".$term."%'"; 
$result = pg_query($sql) or die(pg_last_error());

while($donnee = pg_fetch_object($result)) // on effectue une boucle pour obtenir les données
{
    $tmp=  utf8_encode($donnee->swi_lastname."|".$donnee->swi_firstname."|".$donnee->swi_id.'');
    echo "$tmp\n";
}

?>
