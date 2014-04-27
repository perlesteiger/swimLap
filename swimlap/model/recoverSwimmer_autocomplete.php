<?php
include fonctions_request_stat.php;

$bdd = connect_bdd();

$term = $_GET['term'];

$requete = $bdd->prepare('SELECT swi_firstname, swi_lastname FROM t_e_swimmer_swi WHERE swi_lastname LIKE :term OR swi_firstname LIKE :term'); 
$requete->execute(array('term' => '%'.$term.'%'));

$array = array(); // on créé le tableau

while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
{
    array_push($array, $donnee['swi_lastname']." ".$donnee['swi_firstname']); // et on ajoute celles-ci à notre tableau
}

echo json_encode($array); // il n'y a plus qu'à convertir en JSON

?>
