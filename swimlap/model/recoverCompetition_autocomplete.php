<?php
include fonctions_request_stat.php;

$bdd = connect_bdd();

$term = $_GET['term'];

$requete = $bdd->prepare('SELECT mee_name FROM t_e_meeting_mee WHERE mee_name LIKE :term OR mee_name LIKE :term'); 
$requete->execute(array('term' => '%'.$term.'%'));

$array = array(); // on créé le tableau

while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
{
    array_push($array, $donnee['mee_name']); // et on ajoute celles-ci à notre tableau
}

echo json_encode($array); // il n'y a plus qu'à convertir en JSON

?>
