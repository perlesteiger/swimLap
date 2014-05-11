<?php
include '../var.prepend.php';
include MODEL.'fonctions_crud.php';

$type = $_POST['style'];
if (isset($_POST['nageur']))
    $id_swimmer = $_POST['nageur'];
if (isset($_POST['compet']))
    $id_competition = $_POST['compet'];
if (isset($_POST['course']))
    $type_course = $_POST['course'];
if (isset($_POST['saison']))
    $id_season = $_POST['saison'];

switch ($type) {
    case 'repartition':
        
        $result = recoverSplits($id_swimmer, $id_competition, $type_course, $id_season);
        
        foreach ($result as $tab) {
            $name_swimmer = $tab['nageur'];
            $rencontre = $tab['rencontre'];
            $temps = $tab['temps'];
            $total = $tab['total'];

            //penser au different round a ajouter
            $cpt=1;
            $repartition=array();
            foreach ($temps as $tmp) {
                if ($cpt==1) {
                    $time = -(($tmp*100/$total)-$total);
                    array_push ($repartition, $time);
                    $temporel = $tmp;
                } else {
                    $time = -((($tmp-$temporel)*100/$total)-$total);
                    array_push($repartition, $time);
                    $temporel = $tmp;
                }
                $cpt++;
            }
            $renvoi[]= array('swimmer'=>$name_swimmer, 'meet'=>$rencontre, 'moyenne'=>$repartition);
            //faire encode pour renvoi ou a la fin du switch
        }
        break;

    case 'performance':

        break;
    case 'planification':

        break;

    default:
        break;
}
?>